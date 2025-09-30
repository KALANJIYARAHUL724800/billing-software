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

Route::get('/products', [ProductController::class,'showAllProducts'])->name('products.page');
Route::post('/addproducts',[ProductController::class,'addProducts'])->name('products.insert');

Route::get('/productform', function () {
    return view('productform');
})->name('productform.page');

Route::post('/products-search',[ProductController::class,'searchProduct']);

Route::get('/settings', function () {
    return view('settings');
})->name('settings.page');

Route::get('/billscreen', function () {
    return view('billscreen');
});

Route::get('/listsales', function () {
    return view('listsales');
})->name('listsales.page');

Route::get('/salsereport', function () {
    return view('salsereport');
})->name('salesreport.page');