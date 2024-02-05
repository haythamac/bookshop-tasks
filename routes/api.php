<?php

use App\Http\Controllers\BookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// My way
Route::get('/v1/books', [BookController::class, 'index']);
Route::get('/books', [BookController::class, 'index']);

// Good way
// Route::group(['prefix' => 'v1/books'], function (){
//     Route::get('/', [BookController::class, 'index']);
//     Route::get('/{book_id}', [BookController::class, 'show']);
// });

// Best way
// Route::apiResource('books', BookController::class)->only(['index', 'show']);