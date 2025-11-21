<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Notice\NoticeController;
use App\Http\Controllers\Teachers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/about',[AboutController::class,'about'])->name('about');
Route::get('/principal-speech',function(){
    return view('principal_speech');
});
Route::get('gallery-list',[GalleryController::class,'list'])->name('gallery.list');
Route::get('/contact',[ContactController::class,'contact'])->name('contact');
Route::get('notice-list',[NoticeController::class,'list'])->name('notice.list');
Route::get('notice-show/{id}',[NoticeController::class,'showNotice'])->name('notice.show');
Route::get('teachers',[TeacherController::class,'list'])->name('teachers.list');
Route::get('show-teacher/{id}',[TeacherController::class,'show'])->name('teacher.show');
