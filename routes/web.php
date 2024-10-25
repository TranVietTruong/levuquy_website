<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index']);



Route::get('/preview/{template}', [\App\Http\Controllers\IndexController::class, 'preview']);
