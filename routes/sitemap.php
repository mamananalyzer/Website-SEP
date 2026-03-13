<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;
use App\Models\Product;
use Illuminate\Support\Str;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Sitemap Route
|--------------------------------------------------------------------------
*/
Route::get('/sitemap.xml', function () {
    $products = Product::select('id', 'name', 'brand', 'updated_at')->orderBy('id')->get();

    $urls = [];

    // Static pages
    $staticPages = [
        ['url' => url('/'),        'priority' => '1.0', 'changefreq' => 'weekly'],
        ['url' => url('/about'),   'priority' => '0.8', 'changefreq' => 'monthly'],
        ['url' => url('/contact'), 'priority' => '0.7', 'changefreq' => 'monthly'],
        ['url' => url('/product'), 'priority' => '0.9', 'changefreq' => 'daily'],
    ];

    // Brand pages — static list of the 9 known brand slugs
    foreach (array_keys(ProductController::BRAND_LABELS) as $slug) {
        $staticPages[] = [
            'url'        => url('/product/' . $slug),
            'priority'   => '0.85',
            'changefreq' => 'weekly',
        ];
    }

    // Individual product pages
    foreach ($products as $product) {
        $staticPages[] = [
            'url'        => route('product.show', $product->id),
            'priority'   => '0.7',
            'changefreq' => 'monthly',
            'lastmod'    => $product->updated_at->toAtomString(),
        ];
    }

    $content = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
    $content .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

    foreach ($staticPages as $page) {
        $content .= "  <url>\n";
        $content .= "    <loc>" . htmlspecialchars($page['url']) . "</loc>\n";
        if (isset($page['lastmod'])) {
            $content .= "    <lastmod>{$page['lastmod']}</lastmod>\n";
        }
        $content .= "    <changefreq>{$page['changefreq']}</changefreq>\n";
        $content .= "    <priority>{$page['priority']}</priority>\n";
        $content .= "  </url>\n";
    }

    $content .= '</urlset>';

    return Response::make($content, 200, [
        'Content-Type' => 'application/xml',
    ]);
})->name('sitemap');
