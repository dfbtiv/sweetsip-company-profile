<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReservationController;



// landing page
Route::get('/home', [PageController::class, 'home'])->name('home');

Route::get('/reservation', [ReservationController::class, 'index'])->name('reservation.index');

// admin
Route::get('/admin/login', [AuthController::class, 'showLogin'])->name('admin.login');
