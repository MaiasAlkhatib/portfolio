<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowroomController;

// الصفحة الرئيسية Laravel
Route::get('/', function () {
    return view('welcome');
});

// showroom
Route::get('/showroom', [ShowroomController::class, 'index'])->name('showroom');

// contact (بسيطة الآن)
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
