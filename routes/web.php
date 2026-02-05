<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;

Route::get('/', function () {
    return view('frontend.layouts.website');
})->name('main-page');
Route::get('/home',[WebsiteController::class,'home'])->name('home');
Route::get('/get-start',[WebsiteController::class,'getStart'])->name('get-start');
Route::get('/courses',[WebsiteController::class,'getStart'])->name('courses');
Route::get('/about',[WebsiteController::class,'aboutDetails'])->name('about-page');
Route::get('/course-details',[WebsiteController::class,'courseDetail'])->name('course-details-page');
Route::get('/teacher',[WebsiteController::class,'teacher'])->name('teacher-page');
Route::get('/event',[WebsiteController::class,'event'])->name('event-page');
Route::get('/pricing',[WebsiteController::class,'pricing'])->name('pricing-page');
Route::get('/contact',[WebsiteController::class,'contact'])->name('contact-page');
