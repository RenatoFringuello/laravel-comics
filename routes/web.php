<?php

use App\Http\Controllers\Guest\ComicController;
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

Route::get('/comics', [ComicController::class, 'index'])->name('index');
Route::get('/comics/create', [ComicController::class, 'create'])->name('create');
Route::get('/comics/store', [ComicController::class, 'store'])->name('store');
Route::get('/comics/{id}', [ComicController::class, 'show'])->name('show');