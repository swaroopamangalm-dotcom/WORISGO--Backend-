<?php

use App\Http\Controllers\BookingController;

Route::get('/', [BookingController::class, 'index']);
Route::post('/book', [BookingController::class, 'store']);
Route::get('/status/{id}/{status}', [BookingController::class, 'updateStatus']);
