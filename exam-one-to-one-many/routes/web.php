<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DbController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/company/{id}', [CompanyController::class, 'show']);
Route::get('/company', [CompanyController::class, 'show']);

Route::get('/country',[CompanyController::class,'index']);

Route::get('/database',[DbController::class,'index']);

Route::get('/employee', [EmployeeController::class, 'viewData']);
