<?php

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

Route::get('/', [\App\Http\Controllers\LandingController::class, 'index'])->name('landing');
Route::get('/internet', [\App\Http\Controllers\LandingController::class, 'internet'])->name('landing.internet');
Route::get('/fiber', [\App\Http\Controllers\LandingController::class, 'fiber'])->name('landing.fiber');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/service_plans', [App\Http\Controllers\ServicesPlansController::class, 'index'])->name('serviceplans');
Route::delete('/service_plans/{id}', [App\Http\Controllers\ServicesPlansController::class, 'destroy'])->name('serviceplans.destroy');
Route::get('/service_plans/new', [App\Http\Controllers\ServicesPlansController::class, 'show'])->name('serviceplans.show');
Route::post('/service_plans/save', [App\Http\Controllers\ServicesPlansController::class, 'save'])->name('serviceplans.save');
