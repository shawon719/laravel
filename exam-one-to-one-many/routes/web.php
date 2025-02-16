<?php

use App\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/company/{id}', [CompanyController::class, 'show']);
Route::get('/company', [CompanyController::class, 'show']);

Route::get('/country',[CompanyController::class,'index']);
