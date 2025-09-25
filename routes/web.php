<?php

use App\Http\Controllers\AuthContrller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', function () {
    return view('Homepage');
})->name('home');

// Route::get('/Home', function () {
//     return view('Homepage', ['title' => 'Home Page']);
// });

Route::middleware('guest')->group(function () {

    Route::get('/login', [AuthContrller::class, 'index'])->name('login');
    Route::post('/login', [AuthContrller::class, 'store'])->name('login.store');
    Route::get('/register', [AuthContrller::class, 'register'])->name('auth.register');
    Route::post('/register', [AuthContrller::class, 'storeRegister'])->name('register.store');
});

Route::get('/logout', [AuthContrller::class, 'delete'])->name('auth.delete');


Route::middleware('auth')->group( function () {
Route::get('/todo', [TodoController::class, 'index'])->name('todo');
Route::post('/todo', [TodoController::class, 'store'])->name('todo.post');
Route::put('/todo/{id}', [TodoController::class, 'update'])->name('todo.update');
Route::delete('/todo/{id}', [TodoController::class, 'destroy'])->name('todo.delete');
});