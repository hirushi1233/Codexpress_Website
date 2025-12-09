<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/solution', function () {
    return view('solution');
})->name('solution');

Route::get('/industries', function () {
    return view('industries');
})->name('industries');
