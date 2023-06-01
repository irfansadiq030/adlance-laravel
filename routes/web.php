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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/about-us', function () {
    return view('about');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/stories', function () {
    return view('stories');
});

Route::get('/support-us', function () {
    return view('support-us');
});

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});

Route::get('/terms-and-conditions', function () {
    return view('terms-and-conditions');
});

Route::get('/career', function () {
    return view('career');
});
