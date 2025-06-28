<?php

use App\Http\Controllers\PatientController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('vclaim/participant/{number}', \App\Http\Controllers\VclaimController::class);
Route::apiResource('patients', PatientController::class);
