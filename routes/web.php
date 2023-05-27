<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/course/add', [CourseController::class, 'store'])->name('course.add');

Route::get('/course/explore', [CourseController::class, 'index'])->name('course.index');

Route::post('/course/enroll', [CourseController::class, 'enroll'])->name('course.enroll');