<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemoireController;
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

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/about', [HomeController::class, 'about'])->name('home.about');

Route::get('/memoires', [MemoireController::class, 'index'])->name('memoire.index');
Route::get('/memoires/{id}', [MemoireController::class, 'show'])->name('memoire.show');
