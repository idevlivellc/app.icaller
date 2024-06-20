<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CallController;
use App\Http\Middleware\ValidLogin;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('call-logs', [CallController::class, 'index']);
Route::get('live-calls', function () {
    return 0;
});
