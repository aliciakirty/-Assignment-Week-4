<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});

Route::get('/about', function () {
     return view('about', ['nama' => 'Bu Elza']);
});

Route::get('/blog', function () {
    return view('Blog');
});

Route::get('/contact', function () {
    return view('Contact');
});