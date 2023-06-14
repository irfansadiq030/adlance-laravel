<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

// Frontend Routes

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

/*
|--------------------------------------------------------------------------
| Admin Routes Start
|--------------------------------------------------------------------------
*/

require __DIR__ . '/admin-routes.php';

/*
|--------------------------------------------------------------------------
| Admin Routes End
|--------------------------------------------------------------------------
*/

// Sitemap URL
Route::get('sitemap.xml', function () {
    return response()->view('sitemap.sitemap')->header('Content-Type', 'application/xml');
});

Route::get('sitemap-pages.xml', function () {
    return response()->view('sitemap.sitemap-pages')->header('Content-Type', 'application/xml');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
