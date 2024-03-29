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

// Laravel
Route::get('/welcome', function () {
	return view('welcome');
});

// Vue catch all
Route::fallback(function () {
	return view('vue');
});

Route::get('ajax/cards/get', [\App\Http\Controllers\HomeController::class, 'cards_get'])->name('cards-get');
