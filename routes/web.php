<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;

Route::get('/', function () {
    return view('frontend.layouts.website');
});
Route::get('/home',[WebsiteController::class,'home'])->name('home');
Route::get('/get-start',[WebsiteController::class,'getStart'])->name('get-start');
Route::get('/courses',[WebsiteController::class,'getStart'])->name('courses');
Route::get('/about',[WebsiteController::class,'aboutDetails'])->name('about-page');
