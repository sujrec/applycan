<?php

use Illuminate\Support\Facades\Route;

// We point to 'index' because that is the name of the function in your controller
Route::get('/', [\App\Http\controllers\Front\AdminController::class, 'dashboard'])->name('dashboard');
