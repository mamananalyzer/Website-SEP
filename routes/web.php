<?php

use App\Http\Controllers\RoutingController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;
use App\Models\Product;
use Illuminate\Support\Str;

// ===== Sitemap =====
require __DIR__ . '/sitemap.php';

// ===== Product Routes (must be declared BEFORE generic catch-alls) =====
Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/add',    [ProductController::class, 'create'])->name('product.create');
Route::post('/product/add',   [ProductController::class, 'store'])->name('product.store');
Route::get('/product/delete', [ProductController::class, 'deleteIndex'])->name('product.delete');
Route::post('/product/delete',[ProductController::class, 'bulkDestroy'])->name('product.bulkDestroy');
Route::get('/product/{id}',   [ProductController::class, 'show'])->where('id', '[0-9]+')->name('product.show');
Route::get('/product/{brand}',[ProductController::class, 'brand'])->name('product.brand');

// ===== Generic Routing (catch-all) =====
Route::get('/', [RoutingController::class, 'root'])->name('root');
Route::get('{first}/{second}/{third}', [RoutingController::class, 'thirdLevel'])->name('third');
Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])->name('second');
Route::get('{any}', [RoutingController::class, 'firstLevel'])->name('any');