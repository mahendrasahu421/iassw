<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Frontend Routes (For public / users)
// http://127.0.0.1:8000/
Route::get('/', function () {
    return view('frontend.index');
})->name('home');

Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

// Backend Routes (For admin)
// http://127.0.0.1:8000/admin
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return view('backend.index');
    })->name('dashboard');

    Route::get('/dashboard', function () {
        return view('backend.index');
    });
});
