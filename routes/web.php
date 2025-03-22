<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('portofolio');
});

Route::get('/profile', function () {
    return view('profile');
});
