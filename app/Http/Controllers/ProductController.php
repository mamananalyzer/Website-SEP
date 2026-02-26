<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /** Number of products displayed per page */
    private const PER_PAGE = 12;

    /**
     * Display all products, paginated.
     * GET /product
     */
    public function index()
    {
        $products = Product::orderBy('brand')->orderBy('name')->paginate(self::PER_PAGE);

        // Fetch distinct brands for the sidebar navigation
        $brands = Product::select('brand')
            ->distinct()
            ->orderBy('brand')
            ->pluck('brand');

        return view('product.index', [
            'products'      => $products,
            'brands'        => $brands,
            'selectedBrand' => null,
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

        // Fetch distinct brands for the sidebar navigation
        $brands = Product::select('brand')
            ->distinct()
            ->orderBy('brand')
            ->pluck('brand');

        return view('product.index', [
            'products'      => $products,
            'brands'        => $brands,
            'selectedBrand' => $brand,
        ]);
    }

    /**
     * Display a single product detail page.
     * GET /product/{id}
     */
    public function show(int $id)
    {
        $product = Product::findOrFail($id);

        // Related products from same brand (excluding current)
        $related = Product::byBrand($product->brand)
            ->where('id', '!=', $id)
            ->limit(4)
            ->get();

        return view('product.show', compact('product', 'related'));
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
}
