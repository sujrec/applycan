<?php

use Illuminate\Support\Facades\Route;

// We point to 'index' because that is the name of the function in your controller
Route::get('/', [\App\Http\controllers\Front\AdminController::class, 'dashboard'])->name('dashboard');

Route::get('/search', [\App\Http\controllers\Front\AdminController::class, 'search'])->name('search');

Route::get('/application', [\App\Http\controllers\Front\AdminController::class, 'application'])->name('application');

Route::get('/applicant', [\App\Http\controllers\Front\AdminController::class, 'applicant'])->name('applicant');

Route::get('/draft', [\App\Http\controllers\Front\AdminController::class, 'draft'])->name('draft');

Route::get('/submitted', [\App\Http\controllers\Front\AdminController::class, 'submitted'])->name('submitted');

Route::get('/offers', [\App\Http\controllers\Front\AdminController::class, 'offers'])->name('offers');

Route::get('/deferred', [\App\Http\controllers\Front\AdminController::class, 'deferred'])->name('deferred');

Route::get('/applied', [\App\Http\controllers\Front\AdminController::class, 'applied'])->name('applied');

Route::get('/refund', [\App\Http\controllers\Front\AdminController::class, 'refund'])->name('refund');

Route::get('/visagranted', [\App\Http\controllers\Front\AdminController::class, 'visagranted'])->name('visagranted');

Route::get('/archived', [\App\Http\controllers\Front\AdminController::class, 'archived'])->name('archived');

Route::get('/pending', [\App\Http\controllers\Front\AdminController::class, 'pending'])->name('pending');

Route::get('/completepayment', [\App\Http\controllers\Front\AdminController::class, 'completepayment'])->name('completepayment');
