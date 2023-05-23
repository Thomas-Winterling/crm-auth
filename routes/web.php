<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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


Route::get('/', function () {
    return view('welcome');
});

//register method in AuthController
Route::get('/register', [AuthController::class, 'register'])->name('register');
//storeRegister method in AuthController
Route::post('/register', [AuthController::class, 'storeRegister'])->name('register');
// Login Get
Route::get('/login', [AuthController::class, 'login'])->name('login');
// Login Post
Route::post('/login', [AuthController::class, 'postLogin'])->name('login');
// Logout
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Home
Route::get('/home', [HomeController::class, 'index'])->name('home');
