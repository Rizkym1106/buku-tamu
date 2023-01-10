<?php

use App\Http\Controllers\admin\BukuTamuController;
use App\Http\Controllers\admin\ContentController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\SurveyKepuasanController;
use App\Http\Controllers\admin\UserController;
use App\http\Controllers\admin\PertanyaanController;
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

Route::group(['prefix' => 'beranda'], function(){
    Route::get('/', [DashboardController::class, 'homepage'])->name('dashboard.homepage');
    Route::get('/survey', [DashboardController::class, 'survey'])->name('dashboard.survey');
    Route::get('/pertanyaan/{id}', [DashboardController::class, 'pertanyaan'])->name('dashboard.pertanyaan');
    Route::post('/survey-pertanyaan/{id}', [DashboardController::class, 'hasil'])->name('survey.pertanyaan.hasil');
    
    
    Route::post('/store', [SurveyKepuasanController::class, 'store'])->name('survey_kepuasan_tamu.store');

});
Route::group(['prefix' => 'dashboard', 'middlewware' => ['auth', 'checklevel:1']], function(){
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

    
    Route::group(['prefix' => 'user'], function(){
        Route::get('/', [UserController::class, 'index'])->name('user.index');
        Route::get('/create', [UserController::class, 'create'])->name('user.create');
        Route::post('/store', [UserController::class, 'store'])->name('user.store');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
        Route::post('/update{id}', [UserController::class, 'update'])->name('user.update');
        Route::get('/destroy/{id}', [UserController::class, 'destroy'])->name('user.destroy');

    });

    Route::group(['prefix' => 'manajemen_buku_tamu'], function(){
        Route::get('/', [BukuTamuController::class, 'index'])->name('manajemen_buku_tamu.index');
        Route::get('/exportbukutamu', [BukuTamuController::class, 'bukutamuexport'])->name('buku_tamu.export');
        Route::get('/create', [BukuTamuController::class, 'create'])->name('manajemen_buku_tamu.create');
        Route::post('/store', [BukuTamuController::class, 'store'])->name('manajemen_buku_tamu.store');
        Route::get('/edit/{id}', [BukuTamuController::class, 'edit'])->name('manajemen_buku_tamu.edit');
        Route::post('/update{id}', [BukuTamuController::class, 'update'])->name('manajemen_buku_tamu.update');
        Route::get('/destroy/{id}', [BukuTamuController::class, 'destroy'])->name('manajemen_buku_tamu.destroy');

    });

    Route::group(['prefix' => 'survey_kepuasan_tamu'], function(){
        Route::get('/', [SurveyKepuasanController::class, 'index'])->name('survey_kepuasan_tamu.index');
        Route::get('/create', [SurveyKepuasanController::class, 'create'])->name('survey_kepuasan_tamu.create');
        // Route::post('/store', [SurveyKepuasanController::class, 'store'])->name('survey_kepuasan_tamu.store');
        Route::get('/edit/{id}', [SurveyKepuasanController::class, 'edit'])->name('survey_kepuasan_tamu.edit');
        Route::post('/update{id}', [SurveyKepuasanController::class, 'update'])->name('survey_kepuasan_tamu.update');
        Route::get('/destroy/{id}', [SurveyKepuasanController::class, 'destroy'])->name('survey_kepuasan_tamu.destroy');

    });

    Route::group(['prefix' => 'pertanyaan'], function(){
        Route::get('/', [PertanyaanController::class, 'index'])->name('pertanyaan.index');
        Route::get('/create', [PertanyaanController::class, 'create'])->name('pertanyaan.create');
        Route::post('/store', [PertanyaanController::class, 'store'])->name('pertanyaan.store');
        Route::get('/edit/{id}', [PertanyaanController::class, 'edit'])->name('pertanyaan.edit');
        Route::post('/update{id}', [PertanyaanController::class, 'update'])->name('pertanyaan.update');
        Route::get('/destroy/{id}', [PertanyaanController::class, 'destroy'])->name('pertanyaan.destroy');
    });

});

Route::group(['prefix' => 'login'], function(){
    Route::get('/', [LoginController::class, 'index'])->name('login.index');
    Route::post('/postLogin', [LoginController::class, 'authenticate'])->name('login.authenticate');
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
});
