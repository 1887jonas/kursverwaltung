<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CourseController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AdminController;

Route::get('/', [CourseController::class, 'index']);
Route::get('/courses/{course}', [CourseController::class, 'show']);
Route::post('/courses/{course}/book', [BookingController::class, 'store']);

Route::get('/admin/courses', [AdminController::class, 'index']);
Route::get('/admin/courses/add', [AdminController::class, 'addCourseGet']);
Route::post('/admin/courses/add', [AdminController::class, 'addCoursePost']);
    Route::post('/admin/courses', [CourseController::class, 'store']);
    Route::delete('/admin/courses/{course}', [CourseController::class, 'destroy']);

Route::middleware('auth')->group(function () {
    
});
