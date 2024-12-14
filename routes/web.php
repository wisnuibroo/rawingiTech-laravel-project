<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\LearnController;
use App\Http\Controllers\ProfileController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', function () {
    return view('admin',);
});

Route::get('/home', [HomeController::class, 'index']);
Route::get('/signup', [SignUpController::class, 'showSignup'])->name('signup');
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::get('/learn', [LearnController::class, 'index'])->name('learn');
Route::get('/profile', [ProfileController::class, 'index']);





