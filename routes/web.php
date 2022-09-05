<?php

use App\Http\Controllers\admin\BukuTamuController;
use App\Http\Controllers\admin\ContentController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\SurveyKepuasanController;
use App\Http\Controllers\admin\UserController;
use Illuminate\Auth\Events\Login;
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

Route::get('/', function () {
    return redirect()->route('login.index');
});

Route::group(['prefix' => 'dashboard', 'middlewware' => ['auth', 'checklevel:1']], function(){
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    Route::get('/manajemen_buku_tamu', [BukuTamuController::class, 'index'])->name('manajemen_buku_tamu.index');
    Route::get('/survey_kepuasan_tamu', [SurveyKepuasanController::class, 'index'])->name('survey_kepuasan_tamu.index');
    
    Route::group(['prefix' => 'user'], function(){
        Route::get('/', [UserController::class, 'index'])->name('user.index');
        Route::get('/create', [UserController::class, 'create'])->name('user.create');
        Route::post('/store', [UserController::class, 'store'])->name('user.store');

    });
});

Route::group(['prefix' => 'login'], function(){
    Route::get('/', [LoginController::class, 'index'])->name('login.index');
    Route::post('/postLogin', [LoginController::class, 'authenticate'])->name('login.authenticate');
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
});
