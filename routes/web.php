<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\TagController;
use App\Models\Order;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

//      -*- A D M I N   R O U T E S -*-

Route::get('/admin', function () {
    if (auth()->user()->role == 'Administrador')
        return view('admin.front-page', [
            'users' => User::all(),
            'products' => Product::all(),
            'orders' => Order::all(),
        ]);
    else
        return redirect(route('store'));
})->name('admin-page');

//      -*- PRODUCTS -*-

// Create
Route::get('/admin/new-product', [ProductController::class, 'new_form'])->name('new-product-form');
Route::post('/admin/new-product', [ProductController::class, 'create'])->name('create-product');
// View
Route::get('/admin/products', [ProductController::class, 'list'])->name('list-products');
// Edit
Route::get('/admin/{product}/edit', [ProductController::class, 'edit'])->name('edit-product-form');
Route::patch('/admin/{product}/update', [ProductController::class, 'update'])->name('update-product');
// Delete
Route::delete('/admin/{product}/delete', [ProductController::class, 'delete'])->name('delete-product');


//      -*- CATEGORY -*-

// Create
Route::get('/admin/new-category', [CategoryController::class, 'new_form'])->name('new-category-form');
Route::post('/admin/new-category', [CategoryController::class, 'create'])->name('create-category');
// View
Route::get('/admin/categories', [CategoryController::class, 'list'])->name('list-categories');

//      -*- ORDERS -*-
Route::get('/admin/orders', [OrderController::class, 'list'])->name('list-orders');
Route::post('/admin/orders/send', [OrderController::class, 'processing_to_sent'])->name('send-order');

//      -*- CUSTOMERS -*-
Route::get('/admin/customers-list', [RegisteredUserController::class, 'list'])->name('list-customers');
// Create
Route::get('/admin/new-tag', [TagController::class, 'new_form'])->name('new-tag-form');
Route::post('/admin/new-tag', [TagController::class, 'create'])->name('create-tag');
// View
Route::get('/admin/tags', [TagController::class, 'list'])->name('list-tags');






//      -*- PUBLIC ROUTES -*-

Route::get('/', [StoreController::class, 'front_page'])->name('store');
Route::get('/about', [StoreController::class, 'about'])->name('about');
Route::get('/contact', [StoreController::class, 'contact'])->name('contact');
Route::get('/events', [StoreController::class, 'events'])->name('events');
Route::get('/pricing', [StoreController::class, 'pricing'])->name('pricing');

Route::get('/product/{slug}', [ProductController::class, 'show'])->name('show-product');
Route::get('/products', [ProductController::class, 'show_products'])->name('show-products');
Route::get('/cart', [ProductController::class, 'cart_index'])->name('cart-index');
Route::post('/cart/add/{id}', [ProductController::class, 'add_to_cart'])->name('product-add-to-cart');
Route::post('/cart/add1/{id}', [ProductController::class, 'add_one_to_cart'])->name('add-one-to-cart');
Route::post('/cart/rem1/{id}', [ProductController::class, 'rem_one_from_cart'])->name('rem-one-from-cart');
Route::get('/checkout', [StoreController::class, 'checkout_page'])->name('checkout');
Route::post('/checkout', [OrderController::class, 'cart_to_processing'])->name('process-checkout');
Route::get('/my-orders', [OrderController::class, 'orders_list'])->name('public-orders-list');
Route::get('/my-order/{id}', [OrderController::class, 'show_order'])->name('show-order');




Route::get('/dashboard', function () {
    return redirect(route('store'));
})->middleware(['auth'])->name('dashboard');


require __DIR__ . '/auth.php';
