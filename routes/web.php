<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('erlindas');
})->name('home.page');

Route::get('/about', function () {
    return view('about');
})->name('about.page');

Route::get('/menu', function () {
    return view('menu');
})->name('menu.page');

Route::get('/reviews', function () {
    return view('reviews');
})->name('reviews.page');

Route::get('/franchise', function () {
    return view('franchise');
})->name('franchise.page');

Route::get('/contact', function () {
    return view('contact');
})->name('contact.page');

Route::get('/baristas', function () {
    return view('baristas');
})->name('baristas.page');