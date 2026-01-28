<?php

use Illuminate\Support\Facades\Route;

Route::middleware('web')->group(function () {
    require base_path('routes/front.php');
});