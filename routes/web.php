<?php

use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/Home', function () {
//     return view('Homepage', ['title' => 'Home Page']);
// });

// Route::get('/', [UserController::class, 'View']);// Route controller

Route::get('/', [TodoController::class, 'index'])->name('todo');

Route::post('/todo', [TodoController::class, 'store'])->name('todo.post');

Route::put('/todo/{id}', [TodoController::class, 'update'])->name('todo.update');

Route::delete('/todo/{id}', [TodoController::class, 'destroy'])->name('todo.delete');