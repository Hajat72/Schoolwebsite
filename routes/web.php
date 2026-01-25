<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;

Route::get('/', function () {
    return view('frontend.layouts.website');
});

Route::get('/hero',[WebsiteController::class,'hero'])->name('hero-page');
