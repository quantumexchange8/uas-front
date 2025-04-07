<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.homepage');
})->name('homepage');  // ✅ Add this line to define the "home" route

Route::get('/about', function () {
    return view('pages.about');
})->name('about');  

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');  

Route::get('/consummable', function () {
    return view('pages.consummable');
})->name('consummable');  


Route::get('/login_register)', function () {
    return view('pages.login_register');
})->name('login_register');  

Route::get('/cart)', function () {
    return view('pages.cart');
})->name('cart');  

Route::get('/checkout)', function () {
    return view('pages.checkout');
})->name('checkout');  

Route::get('/wishlist)', function () {
    return view('pages.wishlist');
})->name('wishlist');  

Route::get('/order_tracking)', function () {
    return view('pages.order_tracking');
})->name('order_tracking');  


Route::get('/my_account)', function () {
    return view('pages.my_account');
})->name('my_account');  


Route::get('/shop)', function () {
    return view('pages.shop');
})->name('shop');  

Route::get('/product_detail)', function () {
    return view('pages.product_detail');
})->name('product_detail');  

Route::get('/health_care)', function () {
    return view('pages.health_care');
})->name('health_care');  

Route::get('/remanufactured_ink)', function () {
    return view('pages.remanufactured_ink');
})->name('remanufactured_ink');  

Route::get('/printer_service)', function () {
    return view('pages.printer_service');
})->name('printer_service');  


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
