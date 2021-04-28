<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;

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

// GENERALE
Route::get('/', [PublicController::class, 'index'])->name('homepage');
Route::get('/annunci/category/{cat}', [PublicController::class, 'category'])->name('category');

// ANNUNCI
Route::get('/annunci/index', [AdController::class, 'index'])->name('ad.index');
Route::get('/annunci/create', [AdController::class, 'create'])->name('ad.create')->middleware('auth');
Route::post('/annunci/store', [AdController::class, 'store'])->name('ad.store')->middleware('auth');

// DETTAGLIO ANNUNCI
Route::get('/annunci/show/{ad}', [AdController::class, 'show'])->name('ad.show');

//REVISORE

Route::get('/revisor/index', [RevisorController::class, 'index'])->name('revisor.index');
Route::post('/revisor/ads/{id}/accept', [RevisorController::class, 'accepted'])->name('revisor.accept');
Route::post('/revisor/ads/{id}/reject', [RevisorController::class, 'rejected'])->name('revisor.reject');
