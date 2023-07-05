<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\BlogController;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

// Admin Route

Route::prefix('admin')->group(function () {

    Route::get('/login', [AdminController::class, 'index'])->name('login_form');
    Route::post('admin.login', [AdminController::class, 'admin_login'])->name('admin.login');
    Route::get('dashboard', [AdminController::class, 'admin_dashboard'])->name('admin.dashboard')->middleware('admin');
    Route::get('logout', [AdminController::class, 'admin_logout'])->name('admin.logout');
    Route::get('register', [AdminController::class, 'register'])->name('admin.register');
    Route::post('register', [AdminController::class, 'admin_register'])->name('admin.register.create');
    Route::get('view-profile', [AdminController::class, 'admin_profile'])->name('admin.view-profile');
    Route::get('edit-profile', [AdminController::class, 'edit_profile'])->name('admin.edit-profile');
    Route::post('update-profile', [AdminController::class, 'update_profile'])->name('admin.update-profile');

    // Admin Categories
    Route::get('categories', [CategoryController::class, 'index'])->name('admin.categories');
    Route::get('add-category', [CategoryController::class, 'create'])->name('add-category');
    Route::post('create-category', [CategoryController::class, 'store'])->name('create-category');
    Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::post('/update-category', [CategoryController::class, 'update'])->name('update-category');
    Route::get('/categories/{id}/delete', [CategoryController::class, 'delete'])->name('delete-category');

    // Admin Blogs
    Route::get('blogs', [BlogController::class, 'index'])->name('admin.blogs');

});

// Generate Slug
Route::get('/get-slug', function (Request $request) {
    $slug = '';
    if (!empty($request->input('title'))) {
        $slug = Str::slug($request->title);
    }


    return response()->json([
        'status' => 'true',
        'slug' => $slug
    ]);
})->name("get-slug");
