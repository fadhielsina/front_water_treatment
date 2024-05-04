<?php

use App\Http\Controllers\WatertTreatmentController;
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

Route::get('/', [WatertTreatmentController::class, 'index'])->name('water_treatment.index');
Route::get('/about-us', [WatertTreatmentController::class, 'aboutus'])->name('water_treatment.aboutus');
Route::get('/reverse-osmosis', [WatertTreatmentController::class, 'reverse_osmosis'])->name('water_treatment.reverse_ormosis');
Route::get('/portfolio', [WatertTreatmentController::class, 'portfolio'])->name('water_treatment.portfolio');
Route::get('/blog', [WatertTreatmentController::class, 'blog'])->name('water_treatment.blog');
Route::get('/contact-us', [WatertTreatmentController::class, 'contactus'])->name('water_treatment.contactus');

// Route::get('/', [LandingController::class, 'index'])->name('products.index');
// Route::get('/about-us', [LandingController::class, 'aboutus'])->name('products.aboutus');
// Route::get('/services', [LandingController::class, 'services'])->name('products.services');
// Route::get('/contact-us', [LandingController::class, 'contactus'])->name('products.contactus');
