<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\ValidLogin;


// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('user/{page?}', PageController::class, 'user');

Route::group(['prefix' => 'user'], function () {
    Route::get('logout', [UserController::class, 'logout'])->middleware(ValidLogin::class);
    Route::get('{page?}', [PageController::class, 'user'])->middleware(ValidLogin::class);
});

Route::group(['prefix' => 'auth'], function () {
    Route::post('login', [UserController::class, 'login']);
});

Route::get('login', function () {
    return view('login');
})->name('login');

Route::get('{page?}', [PageController::class, 'view']);