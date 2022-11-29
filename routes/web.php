<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home-page');
Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact-page');
Route::get('/the-company', [App\Http\Controllers\HomeController::class, 'company'])->name('company-page');
Route::get('/the-sectors', [App\Http\Controllers\HomeController::class, 'sector'])->name('sector-page');
Route::get('/services/{slung}', [App\Http\Controllers\HomeController::class, 'services'])->name('services-page');
Route::get('/portfolio', [App\Http\Controllers\HomeController::class, 'portfolio'])->name('portfolio-page');

Route::get('/services/slung', [App\Http\Controllers\HomeController::class, 'service'])->name('service-page');
Route::get('/products/{slung}', [App\Http\Controllers\HomeController::class, 'product'])->name('products-page');

Route::get('/copyright-statement', [App\Http\Controllers\HomeController::class, 'copyright'])->name('copyright-page');
Route::get('/terms-and-conditions', [App\Http\Controllers\HomeController::class, 'terms'])->name('terms-page');
Route::get('/privacy-policy', [App\Http\Controllers\HomeController::class, 'policy'])->name('policy-page');
