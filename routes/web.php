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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/facility', function () {
    return view('facility');
});

Route::get('/price', function () {
    return view('price');
});

Route::get('/review', function () {
    return view('review');
});

Route::get('/load-gallery', function () {
    return view('partials.gallery');
});
