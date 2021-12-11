<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\UserController;
use App\Models\Genre;
use Illuminate\Support\Facades\Route;


Route::get('users', [UserController::class, 'allUsers']);
Route::get('user/{user_id}/books', [UserController::class, 'getUserBooks']);
Route::get('/books', [BooksController::class, 'getAllBooks']);

Route::prefix('/books')->group(function(){
    Route::post('/', [BooksController::class, 'store']);
    Route::post('/{id}', [BooksController::class, 'update']);
    Route::post('/{id}/delete', [BooksController::class, 'delete']);
});

Route::get('/genres', function (){
   return Genre::all();
});


