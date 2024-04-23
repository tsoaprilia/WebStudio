<?php

use App\Http\Controllers\OrderController;
use App\Mail\HelloMail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProfileController;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ADashboardController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Redirect;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
    //Mail::to('tsoaprilia@gmail.com')
    //->send(new HelloMail());
});



Route::get('/nyoba',[ProductController::class, 'index_product_all'])->name('index_product_all');


Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
   //index product
   Route::get('/product', [ProductController::class, 'index_product'])->name('index_product');


Route::middleware(['admin'])->group(function(){
 //Dashboard
 Route::get('/admin/dashboard', [ADashboardController::class, 'dashboard'])->name('dashboard');
 Route::get('/product-purchase-graph', [ADashboardController::class, 'productPurchaseGraph']);


 //Create product
 Route::get('/product/create', [ProductController::class, 'create_product'])->name('create_product');
 Route::post('/product/create', [ProductController::class, 'store_product'])->name('store_product');

 //show detail product
 Route::get('/product/{product}', [ProductController::class, 'show_product'])->name('show_product');

 //edit product
 Route::get('/product/{product}/edit', [ProductController::class, 'edit_product'])->name('edit_product');
 Route::patch('/product/{product}/update', [ProductController::class, 'update_product'])->name('update_product');

 // delete product
 Route::delete('/product/{product}', [ProductController::class, 'delete_product'])->name('delete_product');

 //order
 Route::post('/order/{order}/confirm', [OrderController::class, 'confirm_payment'])->name('confirm_payment');

 //mail
 Route::post('/order/{order}/send-email', [OrderController::class, 'sendEmail'])->name('sendEmail');

 //PROFILE AKUN USER
 Route::get('/user', [UserController::class, 'index_user'])->name('index_user');
 Route::get('/user/{user}', [UserController::class, 'show_user'])->name('show_user');
 Route::get('/user/{user}/edit', [UserController::class, 'edit_user'])->name('edit_user');
 Route::patch('/user/{user}/update', [UserController::class, 'update_user'])->name('update_user');
 Route::delete('/user/{user}', [UserController::class, 'delete_user'])->name('delete_user');


});

Route::middleware(['auth'])->group(function () {


    //show detail product
    Route::get('/product_user/{product}', [ProductController::class, 'show_product_user'])->name('show_product_user');

    //cart
    Route::post('/cart/{product}', [CartController::class, 'add_to_cart'])->name('add_to_cart');
    Route::get('/cart', [CartController::class, 'show_cart'])->name('show_cart');
    Route::delete('/cart/{cart}', [CartController::class, 'delete_cart'])->name('delete_cart');

    //order
    Route::post('/checkout', [OrderController::class, 'checkout'])->name('checkout');
    Route::get('/order', [OrderController::class, 'index_order'])->name('index_order');

    //show order
    Route::get('/order/{order}', [OrderController::class, 'show_order'])->name('show_order');
    Route::post('/order/{order}/pay', [OrderController::class, 'submit_payment_receipt'])->name('submit_payment_receipt');

    //PROFILE
    Route::get('/profile', [ProfileController::class, 'show_profile'])->name('show_profile');
    Route::post('/profile', [ProfileController::class, 'edit_profile'])->name('edit_profile');


});



//Cart
//Route::post('/cart/{product}', [CartController::class, 'add_to_cart'])->name('add_to_cart');

//show cart
//Route::get('/cart', [CartController::class, 'show_cart'])->name('show_cart');

//Delete Cart
//Route::delete('/cart/{cart}', [CartController::class, 'delete_cart'])->name('delete_cart');
