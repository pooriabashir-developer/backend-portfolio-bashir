<?php

use Illuminate\Support\Facades\Route;

Route::get('/we', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('portfolio');
});
