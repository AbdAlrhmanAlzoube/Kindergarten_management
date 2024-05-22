<?php

use App\Http\Controllers\Forebear\AddChildController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\ChildController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ForebearsController;
use App\Http\Controllers\Teacher\AddReviewController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
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

Route::get('/', [UserController::class, 'index'])->name('users.index');


Route::resource('users', UserController::class);
Route::resource('children', ChildController::class);
Route::resource('forebears', ForebearsController::class);
Route::resource('teachers', TeacherController::class);
Route::resource('courses', CourseController::class);
Route::resource('reviews', ReviewController::class);
Route::resource('advertisements', AdvertisementController::class);


Route::get('/Forebear',function()
{
    return view('Dashboard.Forebear.dashboard');
});
Route::resource('forebear_child',AddChildController::class);


Route::get('/teacher',function()
{
    return view('Dashboard.Teacher.dashboard');
});

Route::resource('teacher_review',AddReviewController::class);




