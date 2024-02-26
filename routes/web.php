<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PostController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::post('/posts', [PostController::class, 'store']);
Route::get('/general', [FormController::class, 'GeneralForm']);
Route::get('/regtistration_form', [FormController::class, 'RegistrationForm']);

/*product*/
Route::get('/product_add', [ProductController::class, 'ProductAdd']);
Route::post('/products.store', [ProductController::class, 'store']);
Route::get('/products_show', [ProductController::class, 'show']);
Route::get('/products.edit/{id}', [ProductController::class, 'edit']);
Route::post('/products.update/{id}', [ProductController::class, 'update']);
Route::delete('/products.destroy/{id}', [ProductController::class, 'destroy']);

