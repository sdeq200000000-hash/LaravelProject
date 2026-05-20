<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ShopController;
use App\Http\Middleware\AuthAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;





Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
Route::get('/shop/{product_slug}', [ShopController::class, 'product_details'])->name('shop.product_details');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'add_to_cart'])->name('cart.add');

Route::middleware(['auth'])->group(function() {
    Route::get('/account-dashboard', [UserController::class, 'index'])->name('user.index');
   
});

Route::middleware(['auth',AuthAdmin::class])->group(function() {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/brands', [AdminController::class, 'brands'])->name('admin.brands');
    Route::get('/admin/brands/add', [AdminController::class, 'add_brand'])->name('admin.brand.add');
    Route::post('/admin/brands/store', [AdminController::class, 'store_brand'])->name('admin.brand.store');
    Route::get('/admin/brands/{id}/edit', [AdminController::class, 'brand_edit'])->name('admin.brand.edit');
    Route::post('/admin/brands/update/{id}', [AdminController::class, 'brand_update'])->name('admin.brand.update');
    Route::delete('/admin/brands/{id}/delete', [AdminController::class, 'brand_delete'])->name('admin.brand.delete');

    Route::get('/admin/categories', [AdminController::class, 'categories'])->name('admin.categories');
    Route::get('/admin/categories/add', [AdminController::class, 'add_category'])->name('admin.category.add');
    Route::post('/admin/categories/store', [AdminController::class, 'category_store'])->name('admin.category.store');
    Route::get('/admin/categories/{id}/edit', [AdminController::class, 'category_edit'])->name('admin.category.edit');
    Route::get('/admin/category/{id}', [AdminController::class, 'category_show'])->name('admin.category.show');
    Route::post('/admin/categories/update/{id}', [AdminController::class, 'category_update'])->name('admin.category.update');
    Route::delete('/admin/categories/{id}/delete', [AdminController::class, 'category_delete'])->name('admin.category.delete');

    Route::get('/admin/products', [AdminController::class, 'products'])->name('admin.products');
    Route::get('/admin/products/add', [AdminController::class, 'add_product'])->name('admin.product.add');
    Route::post('/admin/products/store', [AdminController::class, 'store_product'])->name('admin.product.store');
    Route::get('/admin/products/{id}/edit', [AdminController::class, 'product_edit'])->name('admin.product.edit');
    Route::post('/admin/products/update/{id}', [AdminController::class, 'product_update'])->name('admin.product.update');
    Route::delete('/admin/products/{id}/delete', [AdminController::class, 'product_delete'])->name('admin.product.delete');
    
    

});