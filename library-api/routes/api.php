<?php
use App\Http\Controllers\BookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/books', [BookController::class, 'store']);
Route::get('/books', [BookController::class, 'index']);
Route::put('/books/{id}', [BookController::class, 'update']);
Route::delete('/books/{id}', [BookController::class, 'destroy']);

Route::get('/user', function (Request $request) {
 
    return $request->user();
})->middleware('auth:sanctum');
