<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/books/all', [App\Http\Controllers\BookController::class, 'index']);

Route::post('/book/new', [App\Http\Controllers\BookController::class, 'create']);

Route::post('/book/update/{id}', [App\Http\Controllers\BookController::class, 'update']);

Route::post('/book/delete/{id}', [App\Http\Controllers\BookController::class, 'delete']);

