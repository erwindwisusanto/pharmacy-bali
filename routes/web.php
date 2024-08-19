<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);

Route::view("/", "index")->name("index");

Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);

    return redirect()->back();
})->name('change_locale');

Route::group(['middleware' => 'web'], function () {
    Route::post('/destroy-session', [MainController::class, 'destroySession'])->withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class]);
});

Route::post('/save-visit-count', [MainController::class, 'saveVisitCount'])->name('visit-count')->withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class]);
Route::post('/save-click-count', [MainController::class, 'saveClickCount'])->name('click-count');
Route::get('/wa-wording', [MainController::class, 'getWaWording'])->name('get-wa-wording');

// SHOP
Route::get('/shop', [ShopController::class, 'index'])->name('view_shop');
Route::get('/cart', [ShopController::class, 'cart'])->name('cart');
Route::get('products', [ShopController::class, 'Products'])->name('products');
