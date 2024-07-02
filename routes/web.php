<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', Controllers\HomeController::class);

// Route API Method HTTP
Route::get('/api/get/tanaman',[Controllers\APIController::class,'monitoring_tanaman']);
Route::get('/api/get/power',[Controllers\APIController::class,'monitoring_power']);
