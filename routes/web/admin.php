<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;



Route::get('/login', [AuthController::class, 'login']);

Route::get('/', function () {
    return 'root admin';
});


Route::get('/dashboard', function () {
    return base_path('routes/web/admin.php');
});

Route::get('/users', function () {
    return 'users admin';
});

Route::get('/settings', function () {
    return 'settings admin';
});