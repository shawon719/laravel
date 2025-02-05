<?php

use Illuminate\Support\Facades\Route;

Route::get('/yg', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('master');
});
Route::get('/add-user', function () {
    return view('pages.user.add_user');
});

