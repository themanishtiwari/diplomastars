<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/',[indexController::class, 'view']);
Route::get('/index',[indexController::class, 'view']);

Route::get('/dashboard',[LoginController::class, 'dashboard']);


Route::get('/login',[LoginController::class, 'index']);
Route::get('/logout',[LoginController::class, 'logout']);

//admin
Route::get('/admin',[AdminController::class, 'index']);
Route::get('/admin-dashboard',[AdminController::class, 'dashboard']);
Route::get('/admin-logout',[AdminController::class, 'logout']);
//admin post request
Route::post('/admin',[AdminController::class, 'login']);
Route::post('/admin-dashboard',[AdminController::class, 'change']);


//registration and login routes
Route::post('/submit',[indexController::class, 'insert']);
Route::post('/login',[LoginController::class, 'login']);


//updation
Route::post('/dashboard',[DashboardController::class, 'update']);
Route::post('/upload',[DashboardController::class, 'upload']);
Route::post('/remove-profile-img',[DashboardController::class, 'removeimg']);

//details
Route::post('/details', [indexController::class, 'details']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
