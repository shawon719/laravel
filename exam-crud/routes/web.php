<?php

use App\Http\Controllers\MyController;
use App\Models\StudentModel;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/h', function () {
//     return view('home');
// });

Route::get('/h',[MyController::class,'views'])->name('home');
Route::delete('delete/{id}', [MyController::class, 'destroy'])->name('delete');
Route::get('create',[MyController::class,'create'])->name('create');
Route::post('store',[MyController::class,'store'])->name('store');
Route::get('edit/{student_id}',[MyController::class,'update'])->name('edit');
Route::post('edit-store',[MyController::class,'editStore'])->name('editStore');
