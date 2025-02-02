<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/d', function () {
    return view('demo');
});
Route::get('/h', function () {
    return view('home');
});
Route::get('/a', function () {
    return view('about');
});
Route::get('/s', function () {
    return view('service');
});
