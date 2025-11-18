<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about',function(){
    return view('about');
});
Route::get('/principal-speech',function(){
    return view('principal_speech');
});
Route::get('/contact',function(){
    return view('contact');
});
