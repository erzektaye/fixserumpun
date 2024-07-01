<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', Controllers\HomeController::class);

// Route API Method HTTP
Route::get('/api/tumbuhan/suhu:{suhu}/kelembapan:{kelembapan}',[Controllers\APIController::class,'monitoring_tumbuhan']);
Route::get('/api/power/kapasitas:{baterai}/tegangan:{tegangan}/arus{arus}',[Controllers\APIController::class,'monitoring_power']);
