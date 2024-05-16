<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/beranda', function () {
    return "Halaman Beranda";
});

Route::get('/profile', function () {
    return "Profile";
});

Route::get('/salam', function () {
    return ('Selamat datang di Laravel 11');
});