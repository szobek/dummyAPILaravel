<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConfigController;

Route::get('/config', [ConfigController::class, 'getConfig']);
Route::post('/config', [ConfigController::class, 'setConfig']);
