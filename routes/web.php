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
use App\Http\Controllers\CplusplusController;
use App\Http\Controllers\NodeJsController;
use App\Http\Controllers\AiController;
use App\Http\Controllers\GolangController;
use App\Http\Controllers\RubyController;
use App\Http\Controllers\UiUxController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfileMyCourseController;


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
Route::get('/c++', [CplusplusController::class, 'index'])->name('c++');
Route::get('/nodejs', [NodeJsController::class, 'index'])->name('nodejs');
Route::get('/ai', [AiController::class, 'index'])->name('ai');
Route::get('/golang', [GolangController::class, 'index'])->name('golang');
Route::get('/ruby', [RubyController::class, 'index'])->name('ruby');
Route::get('/uiux', [UiUxController::class, 'index'])->name('uiux');


Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/profile-mycourse', [ProfileMyCourseController::class, 'index']);





