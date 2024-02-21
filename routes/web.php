<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Section2Controller;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\OurserviceController;
use App\Http\Controllers\FooterController;

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

Route::get('/', [App\Http\Controllers\LandingController::class, 'index'])->name('inicio');
Route::get('/landing/{id}', [App\Http\Controllers\LandingController::class, 'show'])->name('landing');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/header', [App\Http\Controllers\HeaderController::class, 'index'])->name('header.index');
    Route::post('/header', [App\Http\Controllers\HeaderController::class, 'store'])->name('header.store');
    Route::put('/header', [App\Http\Controllers\HeaderController::class, 'update'])->name('header.update');
    Route::get('/section2', [App\Http\Controllers\Section2Controller::class, 'index'])->name('section2.index');
    Route::post('/section2', [App\Http\Controllers\Section2Controller::class, 'store'])->name('section2.store');
    Route::put('/section2', [App\Http\Controllers\Section2Controller::class, 'update'])->name('section2.update');
    Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about.index');
    Route::post('/about', [App\Http\Controllers\AboutController::class, 'store'])->name('about.store');
    Route::put('/about', [App\Http\Controllers\AboutController::class, 'update'])->name('about.update');
    Route::get('/our_services', [App\Http\Controllers\OurserviceController::class, 'index'])->name('our_services.index');
    Route::post('/our_services', [App\Http\Controllers\OurserviceController::class, 'store'])->name('our_services.store');
    Route::put('/our_services', [App\Http\Controllers\OurserviceController::class, 'update'])->name('our_services.update');
    Route::get('/footer', [App\Http\Controllers\FooterController::class, 'index'])->name('footer.index');
    Route::post('/footer', [App\Http\Controllers\FooterController::class, 'store'])->name('footer.store');
    Route::put('/footer', [App\Http\Controllers\FooterController::class, 'update'])->name('footer.update');
});


