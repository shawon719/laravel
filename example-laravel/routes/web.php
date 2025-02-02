<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/d', function () {
    return view('demo');
});


// Route::get('/h', function () {
//     return view('home');
// });
Route::get('/h',[UserController::class, 'sharmony']);
Route::get('/d', [UserController::class, 'index']);
Route::delete('delete{id}',UserController::class . '@destroy')->name('delete');
Route::get('create', [UserController::class, 'create'])->name('create');
Route::post('store', [UserController::class, 'store'])->name('store');
Route::get('edit/{student_id}',[UserController::class, 'update'])->name('edit');
Route::post('edit-store',[UserController::class,'editStore'])->name('editStore');

