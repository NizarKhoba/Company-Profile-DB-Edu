<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});

Route::get('/navbar', function () {
    return view('navbar');
});

Route::get('/faq', function () {
    return view('faq');
});