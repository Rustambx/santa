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

Route::get('/', [\App\Http\Controllers\SantaController::class, 'index'])->name('santa.index');
Route::post('/generate', [\App\Http\Controllers\SantaController::class, 'generatePairs'])->name('santa.generate.pairs');
