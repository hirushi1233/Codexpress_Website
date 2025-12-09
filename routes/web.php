<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\TechnologyController;
use App\Http\Controllers\CareersController;
use App\Http\Controllers\SolutionsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CoursesController;

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


//technology route
Route::get('/technology', [TechnologyController::class, 'index'])->name('technology.index');

// careers route

Route::get('/career', function () {
    return view('career');
})->name('career.index');


// solutions route

Route::get('/solution', function () {
    return view('solution');
})->name('solution');

////courses route
//Route::get('/courses', [CoursesController::class, 'index'])->name('courses.index');


// Add industries route

Route::get('/industries', function () {
    return view('industries');
})->name('industries');



//admin panel

// Secret Admin Routes
Route::get('/secret-admin-login', [AdminController::class, 'login']);
Route::post('/secret-admin-login', [AdminController::class, 'loginPost']);
Route::get('/secret-admin-panel', [AdminController::class, 'dashboard']);
Route::get('/admin-logout', [AdminController::class, 'logout']);

// Solutions
Route::post('/admin/solution/add', [AdminController::class, 'addSolution']);
Route::post('/admin/solution/{id}', [AdminController::class, 'updateSolution']);
Route::get('/admin/solution/delete/{id}', [AdminController::class, 'deleteSolution']);

// Technologies
Route::post('/admin/technology/add', [AdminController::class, 'addTechnology']);
Route::post('/admin/technology/{id}', [AdminController::class, 'updateTechnology']);
Route::get('/admin/technology/delete/{id}', [AdminController::class, 'deleteTechnology']);

// Industries
Route::post('/admin/industry/add', [AdminController::class, 'addIndustry']);
Route::post('/admin/industry/{id}', [AdminController::class, 'updateIndustry']);
Route::get('/admin/industry/delete/{id}', [AdminController::class, 'deleteIndustry']);

// Careers
Route::post('/admin/career/add', [AdminController::class, 'addCareer']);
Route::post('/admin/career/{id}', [AdminController::class, 'updateCareer']);
Route::get('/admin/career/delete/{id}', [AdminController::class, 'deleteCareer']);

// Courses
Route::post('/admin/course/add', [AdminController::class, 'addCourse']);
Route::post('/admin/course/{id}', [AdminController::class, 'updateCourse']);
Route::get('/admin/course/delete/{id}', [AdminController::class, 'deleteCourse']);
