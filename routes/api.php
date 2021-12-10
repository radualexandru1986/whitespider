<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('users', [\App\Http\Controllers\UserController::class, 'allUsers']);
Route::get('user/{user_id}/books', [\App\Http\Controllers\UserController::class, 'getUserBooks']);
Route::get('/books', [\App\Http\Controllers\BooksController::class, 'getAllBooks']);

Route::prefix('/books')->group(function(){
    Route::post('/', [\App\Http\Controllers\BooksController::class, 'store']);
    Route::post('/{id}', [\App\Http\Controllers\BooksController::class, 'update']);
    Route::post('/{id}/delete', [\App\Http\Controllers\BooksController::class, 'delete']);
});


