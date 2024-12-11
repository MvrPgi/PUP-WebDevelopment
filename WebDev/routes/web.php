<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return "Sample Ui";
})->name('homePage');

Route::get('/about', function () {
    return"<a href ='" . route('homePage'). "'>Home</a>";
});