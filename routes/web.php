<?php

use App\Models\Portofolio;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortofolioController;

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

Route::get('/', function () {
    $portofolios = Portofolio::all();
    return view('index', compact('portofolios'));
})->name("home");

Route::get('/about', function () {
    return view('about');
});

Route::get('/certificate', function () {
    return view('certificate');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/portofolio', function () {
    return view('portofolio');
});

Route::get('/portofolio-page', function () {
    return view('portofolio-page');
});

Route::get('/portofolio-page2', function () {
    return view('portofolio-page2');
});

Route::get('/portofolio-page3', function () {
    return view('portofolio-page3');
});

Route::get('/portofolio-page4', function () {
    return view('portofolio-page4');
});

Route::get('/portofolio-page5', function () {
    return view('portofolio-page5');
});

Route::get('/portofolio-page6', function () {
    return view('portofolio-page6');
});

Route::middleware('auth')->group(function () {
    Route::get('/a', [HomeController::class,'index'])->name('index');

});

Route::prefix('/auth')->group(function () {
    Route::get('/login', [AuthController::class,'getLogin'])->name("login");
    Route::post('auth/login', [AuthController::class,'postLogin'])->name('post.login');

    Route::get('/register', [AuthController::class,'getRegister'])->name("register");
    Route::post('/register', [AuthController::class,'postRegister'])->name('post.register');

    Route::get('/logout', [AuthController::class,'getLogout'])->name("logout");
});

Route::post('/portofolio', [PortofolioController::class, 'store']);
