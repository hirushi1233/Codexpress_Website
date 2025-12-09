<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\TechnologyController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/technology', function () {
    return view('technology');
})->name('technology');

Route::get('/careers', function () {
    return view('careers');
})->name('careers');


Route::get('/courses', function () {
    return view('courses');
})->name('courses');





// Replace your existing /technology route with this:
Route::get('/technology', [TechnologyController::class, 'index'])->name('technology.index');
