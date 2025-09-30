<?php

use App\Http\Controllers\AvailableController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('login');
});

Route::get('/available', function () {
    return view('available');
});
Route::post('/insert-available',[AvailableController::class,'insertCash'])->name('available.insert');

Route::get('/billing', function () {
    return view('billing');
})->name('billing');

Route::get('/products', function () {
    return view('products');
});
Route::post('/addproducts',[ProductController::class,'addProducts'])->name('products.insert');

Route::get('/productform', function () {
    return view('productform');
});

Route::post('/products-search',[ProductController::class,'searchProduct']);

Route::get('/settings', function () {
    return view('settings');
});

Route::get('/billscreen', function () {
    return view('billscreen');
});

Route::get('/listsales', function () {
    return view('listsales');
});

Route::get('/salsereport', function () {
    return view('salsereport');
});