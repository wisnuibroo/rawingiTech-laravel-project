<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController,
    LoginController,
    SignUpController,
    LearnController,
    JavaController,
    JsController,
    CsharpController,
    MySqlController,
    PythonController,
    HtmlController,
    CplusplusController,
    NodeJsController,
    AiController,
    GolangController,
    RubyController,
    UiUxController,
    ProfileController,
    ProfileMyCourseController,
    ProfileCertificationController
};

// Routes untuk halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Routes untuk user-related pages
Route::get('/home', [HomeController::class, 'index']);
Route::get('/signup', [SignUpController::class, 'showSignup'])->name('signup');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Routes untuk kursus
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

// Routes untuk profil dan kursus pengguna
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/profile-mycourse', [ProfileMyCourseController::class, 'index']);
Route::get('/profile-certification', [ProfileCertificationController::class, 'index']);

Route::get('/profile-mycourse', [ProfileMyCourseController::class, 'index'])->name('profile-mycourse');


Route::get('/profile/add-course/{course}', [ProfileMyCourseController::class, 'addCourseToProfile'])->name('profile.addCourse');





