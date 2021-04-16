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
Route::get('/user/{id}', [App\Http\Controllers\UserController::class, 'show']);
Route::get('/authorbook/all', [App\Http\Controllers\AuthorBookController::class, 'index']);

Route::post('/book/new', [App\Http\Controllers\BookController::class, 'create']);
Route::post('/user/new', [App\Http\Controllers\UserController::class, 'create']);

Route::post('/book/update/{id}', [App\Http\Controllers\BookController::class, 'update']);
Route::post('/user/update/{id}', [App\Http\Controllers\UserController::class, 'update']);

Route::post('/book/delete/{id}', [App\Http\Controllers\BookController::class, 'delete']);
Route::post('/user/delete/{id}', [App\Http\Controllers\UserController::class, 'delete']);
