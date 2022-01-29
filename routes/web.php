<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;


// HOME
Route::get('/', [HomeController::class, 'home'])->name('home');

// MESSAGES
Route::get('/messages', [MessageController::class, 'index'])
     ->name('messages.index')
     ->middleware('auth:sanctum');

Route::get('/messages/{message}', [MessageController::class, 'show'])
    ->name('messages.show')
    ->middleware('auth:sanctum');

Route::post('/messages', [MessageController::class, 'store'])
     ->name('messages.store');

Route::delete('/messages/{message}', [MessageController::class, 'destroy'])
     ->name('messages.destroy')
     ->middleware('auth:sanctum');
