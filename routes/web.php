<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; 

Route::get('/', [UserController::class, 'index'])->name('user.index'); 
Route::get('/show.user/{user}', [UserController::class,'show'])->name('user.show');
Route::get('/create.user', [UserController::class, 'create'])->name('user.create');
Route::post('/store.user', [UserController::class, 'store'])->name('user.store');
Route::get('/edit.user/{user}', [UserController::class,'edit'])->name('user.edit');
Route::put('/update.user/{user}', [UserController::class,'update'])->name('user.update');
Route::delete('/destroy.user/{user}', [UserController::class,'destroy'])->name('user.destroy');

