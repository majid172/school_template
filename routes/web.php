<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/principal-speech', function () {
    return view('principal_speech');
});

Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
