<?php

use App\Http\Controllers\admin\BukuTamuController;
use App\Http\Controllers\admin\ContentController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\UserController;
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
    return view('welcome');
});

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('manajemen_buku_tamu', [BukuTamuController::class, 'index'])->name('manajemen_buku_tamu.index');
Route::get('user', [UserController::class, 'index'])->name('user.index');

