<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\LearnController;
use App\Http\Controllers\JavaController;
use App\Http\Controllers\JsController;
use App\Http\Controllers\CsharpController;
use App\Http\Controllers\MySqlController;
use App\Http\Controllers\PythonController;
use App\Http\Controllers\HtmlController;
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
Route::get('/java', [JavaController::class, 'index'])->name('java');
Route::get('/js', [JsController::class, 'index'])->name('js');
Route::get('/csharp', [CsharpController::class, 'index'])->name('csharp');
Route::get('/mysql', [MySqlController::class, 'index'])->name('mysql');
Route::get('/python', [PythonController::class, 'index'])->name('python');
Route::get('/html', [HtmlController::class, 'index'])->name('html');
Route::get('/profile', [ProfileController::class, 'index']);





