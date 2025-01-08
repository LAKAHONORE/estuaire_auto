<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\PermiController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FormationConroller;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');


Route::resource('config', ConfigController::class);
Route::resource('permis', PermiController::class);
Route::resource('formation', FormationConroller::class);
Route::resource('contact', ContactController::class);