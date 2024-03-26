<?php

use App\Http\Controllers\ChildController;
use App\Http\Controllers\ForebearsController;
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
// Route::resource('child', ChildController::class);
Route::resource('children', ChildController::class);
Route::resource('forebears', ForebearsController::class);


