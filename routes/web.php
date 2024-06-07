<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TodoCategoryController;
use App\Http\Controllers\TodolistController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    // Users
    Route::resource('users', UserController::class);

    // Kategori Todo
    Route::resource('kategori-todo', TodoCategoryController::class);

    // Todolist
    Route::resource('todolist', TodolistController::class);
});

Route::middleware(['guest'])->group(function () {
    Route::get('/', [AuthController::class, 'login'])->name('login');
    Route::post('/', [AuthController::class, 'auth'])->name('auth');
});