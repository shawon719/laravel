<?php


use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/h',[StudentController::class,'index']);
Route::delete('/delete/{id}', [StudentController::class, 'destroy'])->name('delete');
Route::get('create',[StudentController::class,'create'])->name('create');
Route::post('store',[StudentController::class,'store'])->name('store');
Route::get('edit/{student_id}',[StudentController::class,'update'])->name('edit');
Route::post('edit-store',[StudentController::class,'editStore'])->name('editStore');

