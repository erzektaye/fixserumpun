<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;


Route::name('admin.')->prefix('admin')->middleware(['auth', 'verified'])->group(function(){
    Route::resource('/dashboard', Controllers\AdminController::class);
    Route::get('/tanaman', [Controllers\MonitoringController::class, 'tanaman'])->name('tanaman');
    Route::get('/power', [Controllers\MonitoringController::class,'power'])->name('power');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [Controllers\ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', Controllers\HomeController::class);

// Route API Method HTTP
Route::post('/api/post/tanaman',[Controllers\APIController::class,'monitoring_tanaman']);
Route::post('/api/post/power',[Controllers\APIController::class,'monitoring_power']);

require __DIR__.'/auth.php';
