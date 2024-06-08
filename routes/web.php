<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
    return view('auth/login');
});

Route::get('/menu', function () {
    return view('main.menu');
})->middleware(['auth'])->name('menu');

Route::get('/proposed_product_register', [ProductController::class, 'showProposedProduct'])->middleware('auth')->name('showProposedProductRegister');

Route::post('/proposed_product_register', [ProductController::class, 'storeProposedProduct'])->name('storeProposedProductRegister');

Route::get('/compared_product_register', [ProductController::class, 'showComparedProduct'])->middleware('auth')->name('showComparedProductRegister');

Route::post('/compared_product_register', [ProductController::class, 'storeComparedProduct'])->name('storeComparedProductRegister');

Route::get('/proposed_product_detail', [ProductController::class, 'showProposedProductDetail1'])->middleware('auth')->name('showProposedProductDetail1');

Route::post('/proposed_product_detail', [ProductController::class, 'showProposedProductDetail2'])->middleware('auth')->name('showProposedProductDetail2');

Route::get('/compared_product_detail', [ProductController::class, 'showComparedProductDetail1'])->middleware('auth')->name('showComparedProductDetail1');

Route::post('/compared_product_detail', [ProductController::class, 'showComparedProductDetail2'])->middleware('auth')->name('showComparedProductDetail2');

Route::post('/compared_product_confirm', [ProductController::class, 'showComparedProductConfirm'])->middleware('auth')->name('showComparedProductConfirm');

Route::get('/proposed_product_continues', [ProductController::class, 'showProposedProductContinues'])->middleware('auth')->name('showProposedProductContinues');

Route::post('/proposed_product_continues', [ProductController::class, 'storeProposedProductContinues'])->middleware('auth')->name('storeProposedProductContinues');

Route::get('/choice', [ProductController::class, 'choice'])->middleware('auth')->name('choice');

Route::POST('/compare', [ProductController::class, 'compare'])->middleware('auth')->name('compare');

require __DIR__.'/auth.php';
