<?php

use Illuminate\Support\Facades\Route;

// Homepage
Route::get('/', function () {
    return view('home');
})->name('home');

// Films
Route::get('/movies', function () {
    return view('movies');
})->name('movies');

// Series
Route::get('/series', function () {
    return view('series');
})->name('series');

// Kapsalon pagina's

// Diensten
Route::get('/diensten', function () {
    return view('diensten');
})->name('diensten');

// Producten
Route::get('/producten', function () {
    return view('producten');
})->name('producten');

// Contact
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
