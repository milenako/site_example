<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('index');
});



Route::get('/categories', function () {
    return view('categories');
});

Route::get('/tour', function () {
    return view('tour');
});