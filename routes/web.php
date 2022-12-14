<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class,'dashboard'])->middleware(['auth']);
Route::get('/login', [HomeController::class,'login']);
Route::get('/register', [HomeController::class,'register']);
Route::post('/register', [UserController::class,'signup'])->name('Register');
Route::post('/login',[UserController::class,'Login'])->name('login');
Route::get('/logout', [UserController::class,'Logout']);
