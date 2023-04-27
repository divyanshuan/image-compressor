<?php

use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::controller(ImageController::class)->group(function () {
//     Route::get('/image-upload', 'index')->name('image.form');
//     Route::post('/upload-image', 'storeImage')->name('image.store');
// });

Route::middleware('optimizeImages')->group(function () {
    Route::get('/image-upload', [ImageController::class, 'index'])->name('image.form');
    Route::post('/upload-image', [ImageController::class, 'storeImage'])->name('image.store');
});
