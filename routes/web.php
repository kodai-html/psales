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

Route::get('/own_register', [ProductController::class, 'showOwn'])->middleware('auth')->name('showOwnRegister');

Route::post('/own_register', [ProductController::class, 'storeOwn'])->name('storeOwnRegister');

Route::get('/other_register', [ProductController::class, 'showOther'])->middleware('auth')->name('showOtherRegister');

Route::post('/other_register', [ProductController::class, 'storeOther'])->name('storeOtherRegister');

Route::get('/own_edit', [ProductController::class, 'showOwnEdit'])->middleware('auth')->name('showOwnEdit');

Route::post('/own_edit', [ProductController::class, 'storeOwnEdit'])->name('storeOwnEdit');

Route::get('/other_edit', [ProductController::class, 'showOtherEdit'])->middleware('auth')->name('showOtherEdit');

Route::post('/other_edit', [ProductController::class, 'storeOtherEdit'])->name('storeOtherEdit');

Route::get('/compare', [ProductController::class, 'compare'])->name('compare');

Route::post('/add_record', [ProductController::class, 'addRecord'])->name('addRecord');

require __DIR__.'/auth.php';
