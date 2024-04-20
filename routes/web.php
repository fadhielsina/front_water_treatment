<?php

use App\Http\Controllers\LandingController;
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

Route::get('/', [LandingController::class, 'index'])->name('products.index');
Route::get('/about-us', [LandingController::class, 'aboutus'])->name('products.aboutus');
Route::get('/services', [LandingController::class, 'services'])->name('products.services');
Route::get('/contact-us', [LandingController::class, 'contactus'])->name('products.contactus');
Route::get('/blog', function () {
    abort(404);
    // return view('landing_page/blog');
});
