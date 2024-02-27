<?php

use Dpb\Auth\Http\Controllers\AuthenticatedSessionController;
use Dpb\Auth\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->middleware(['web', 'guest'])
    ->name('login');

/*
Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->middleware(['web', 'guest']);

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware(['web', 'auth'])
    ->name('logout');
*/