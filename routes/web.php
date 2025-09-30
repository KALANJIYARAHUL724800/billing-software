<?php

use App\Http\Controllers\AvailableController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});
Route::get('/login', function () {
    return view('login');
});
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['admin'])->group(function () {

    Route::get('/available', function () {
        return view('available');
    });
    Route::post('/insert-available', [AvailableController::class, 'insertCash'])->name('available.insert');

    Route::get('/billing', function () {
        return view('billing');
    })->name('billing');

    Route::get('/products', [ProductController::class, 'showAllProducts'])->name('products.page');
    Route::get('/edit-products/{id}', [ProductController::class, 'editProducts'])->name('products.edit');
    Route::post('/addproducts', [ProductController::class, 'addProducts'])->name('products.insert');

    Route::get('/productform', function () {
        return view('productform');
    })->name('productform.page');

    Route::post('/products-search', [ProductController::class, 'searchProduct']);

    Route::get('/settings', [SettingController::class, 'showRecord'])->name('settings.page');

    Route::post('/settings', [SettingController::class, 'insertSetting'])->name('settings.update');

    Route::get('/billscreen', function () {
        return view('billscreen');
    });

    Route::get('/listsales', function () {
        return view('listsales');
    })->name('listsales.page');

    Route::get('/salsereport', function () {
        return view('salsereport');
    })->name('salesreport.page');
});