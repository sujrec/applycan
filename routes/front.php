<?php

use Illuminate\Support\Facades\Route;

// We point to 'index' because that is the name of the function in your controller
Route::get('/', [\App\Http\controllers\Front\AdminController::class, 'dashboard'])->name('dashboard');

Route::get('/search', [\App\Http\controllers\Front\AdminController::class, 'search'])->name('search');

Route::get('/application', [\App\Http\controllers\Front\AdminController::class, 'application'])->name('application');

Route::get('/applicant', [\App\Http\controllers\Front\AdminController::class, 'applicant'])->name('applicant');

Route::get('/draft', [\App\Http\controllers\Front\AdminController::class, 'draft'])->name('draft');
