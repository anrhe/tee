<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', [
        "name" => "rhesa",
        "age" => 20,
        "address" => "Jakarta",
    ]);
});

Route::get('/page2', function () {
    return view('page2');
});

Route::get('/page3', function () {
    return view('page3');
});