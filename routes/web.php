<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\CVController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	return view('home');
});

Route::post('/contact/submit', [ContactController::class, 'submit']);
Route::get('/cv', [CVController::class, 'download']);
