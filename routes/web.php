<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', [PageController::class, 'home']);
Route::get('/reservation', function () {
    return view ('pages.reservation');
});
Route::get('/admin/login', [AuthController::class, 'showLogin'])->name('admin.login');
