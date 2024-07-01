<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index']);
Route::get('/aboutus', [HomeController::class,'about']);
Route::get('/bca', [HomeController::class,'bca']);
Route::get('/bscit', [HomeController::class,'bscit']);
Route::get('/bscit1', [HomeController::class,'bscit1']);
Route::get('/bscit2', [HomeController::class,'bscit2']);
Route::get('/bscit3', [HomeController::class,'bscit3']);
Route::get('/contactus', [HomeController::class,'contact']);
Route::get('/mcq', [HomeController::class,'mcq']);
Route::get('/videolec', [HomeController::class,'videolec']);
Route::get('/imperativeprogramming', [HomeController::class,'ipvl']);
Route::get('/ebook', [HomeController::class,'ebooks']);
Route::get('/science', [HomeController::class,'science']);


use App\Http\Controllers\CourseController;

Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('/courses/create', [CourseController::class, 'create'])->name('courses.create');
Route::post('/courses/store', [CourseController::class, 'store'])->name('courses.store');
Route::get('/courses/{id}', [CourseController::class, 'show'])->name('courses.show');
Route::get('/courses/{id}/edit', [CourseController::class, 'edit'])->name('courses.edit');
Route::put('/courses/{id}', [CourseController::class, 'update'])->name('courses.update');
Route::delete('/courses/{id}', [CourseController::class, 'destroy'])->name('courses.destroy');

use App\Http\Controllers\SemesterMasterController;

Route::get('/semester', [SemesterMasterController::class, 'index'])->name('semester.index');
Route::get('/semester/create', [SemesterMasterController::class, 'create'])->name('semester.create');
Route::post('/semester/store', [SemesterMasterController::class, 'store'])->name('semester.store');
Route::get('/semester/{id}', [SemesterMasterController::class, 'show'])->name('semester.show');
Route::get('/semester/{id}/edit', [SemesterMasterController::class, 'edit'])->name('semester.edit');
Route::put('/semester/{id}', [SemesterMasterController::class, 'update'])->name('semester.update');
Route::delete('/semester/{id}', [SemesterMasterController::class, 'destroy'])->name('semester.destroy');

    