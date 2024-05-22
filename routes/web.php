<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/listings', function () {
    return view('listings');
});

Route::get('/property', function () {
    return view('property');
});
