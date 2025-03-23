<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('portofolio');
});

Route::get('/crud', function () {
    return view('CRUD');
});
