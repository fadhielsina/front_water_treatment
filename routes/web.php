<?php

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
    return view('landing_page/index');
});
Route::get('/about-us', function () {
    return view('landing_page/aboutus');
});
Route::get('/services', function () {
    return view('landing_page/services');
});
Route::get('/blog', function () {
    abort(404);
    // return view('landing_page/blog');
});
Route::get('/contact-us', function () {
    return view('landing_page/contactus');
});
