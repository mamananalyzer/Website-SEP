<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /** Number of products displayed per page */
    private const PER_PAGE = 12;

    /** Slug → display name map for the 9 known brands */
    public const BRAND_LABELS = [
        'te-connectivity' => 'TE Connectivity',
        'schaffner'       => 'Schaffner',
        'ritz'            => 'Ritz',
        'abb'             => 'ABB',
        'hilkar'          => 'Hilkar',
        'ge-schneider'    => 'GE/ Schneider',
        'ome'             => 'OME',
        'elmeasure'       => 'Elmeasure',
        'pizzato'         => 'Pizzato',
    ];

    /**
     * Display all products, paginated.
     * GET /product
     */
    public function index()
    {
        $products = Product::orderBy('brand')->orderBy('name')->paginate(self::PER_PAGE);

        $brands = Product::select('brand')
            ->distinct()
            ->orderBy('brand')
            ->pluck('brand');

        return view('product.index', [
            'products'      => $products,
            'brands'        => $brands,
            'selectedBrand' => null,
            'brandLabels'   => self::BRAND_LABELS,
        ]);
    }

    /**
     * Display products filtered by brand (case-insensitive), paginated.
     * GET /product/{brand}
     */
    public function brand(string $brand)
    {
        $products = Product::byBrand($brand)
            ->orderBy('name')
            ->paginate(self::PER_PAGE);

        $brands = Product::select('brand')
            ->distinct()
            ->orderBy('brand')
            ->pluck('brand');

        return view('product.index', [
            'products'      => $products,
            'brands'        => $brands,
            'selectedBrand' => $brand,
            'brandLabels'   => self::BRAND_LABELS,
        ]);
    }

    /**
     * Display a single product detail page.
     * GET /product/{id}
     */
    public function show(int $id)
    {
        $product = Product::findOrFail($id);

        $related = Product::byBrand($product->brand)
            ->where('id', '!=', $id)
            ->limit(4)
            ->get();

        return view('product.show', array_merge(
            compact('product', 'related'),
            ['brandLabels' => self::BRAND_LABELS]
        ));
    }

    /**
     * Show the form for creating a new product.
     * GET /product/add
     */
    public function create()
    {
        $brands = Product::select('brand')
            ->distinct()
            ->orderBy('brand')
            ->pluck('brand');

        return view('product.create', compact('brands'));
    }

    /**
     * Store a newly created product.
     * POST /product/add
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'        => 'required|string|max:255',
            'brand'       => 'required|string|max:100',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'description' => 'nullable|string',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
        }

        Product::create([
            'name'        => $validated['name'],
            'brand'       => $validated['brand'],
            'image_path'  => $imagePath,
            'description' => $validated['description'] ?? null,
        ]);

        return redirect()->route('product.create')
            ->with('success', 'Product "' . $validated['name'] . '" added successfully.');
    }

    /**
     * Show the bulk-delete management page.
     * GET /product/delete
     */
    public function deleteIndex(Request $request)
    {
        $selectedBrand = $request->query('brand');

        $query = Product::orderBy('brand')->orderBy('name');
        if ($selectedBrand) {
            $query->byBrand($selectedBrand);
        }
        $products = $query->get();

        $brands = Product::select('brand')
            ->distinct()
            ->orderBy('brand')
            ->pluck('brand');

        return view('product.delete', compact('products', 'brands', 'selectedBrand'));
    }

    /**
     * Bulk-delete the selected products.
     * POST /product/delete
     */
    public function bulkDestroy(Request $request)
    {
        $request->validate([
            'ids'   => 'required|array|min:1',
            'ids.*' => 'integer|exists:products,id',
        ]);

        $products = Product::whereIn('id', $request->ids)->get();

        foreach ($products as $product) {
            if ($product->image_path) {
                Storage::disk('public')->delete($product->image_path);
            }
            $product->delete();
        }

        $count = $products->count();

        return redirect()->route('product.delete')
            ->with('success', $count . ' product' . ($count !== 1 ? 's' : '') . ' deleted successfully.');
    }
}
