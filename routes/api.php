<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use Illuminate\Support\Facades\Auth;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// public route
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('books', [BookController::class, 'index']);
Route::get('/Books/{id}', [BookController::class, 'show']);
Route::get('/Books/{id}', [BookController::class, 'show']);
Route::get('/Authors', [BookController::class, 'index']);
Route::get('/Authors/{id}', [BookController::class, 'show']);

//protected routes
Route::middleware('auth:sanctum')->group(function () {
    Route::resource('books', BookController::class)->except('create', 'edit', 'show', 'index');
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::resource('authors', AuthorController::class)->except('create', 'edit', 'show', 'index');
});


// Route::get('/me', [AuthController::class, 'me']);

// Route::get('/books', [BookController::class, 'index']);
// Route::get('/books/{id}', [BookController::class, 'show']);
Route::post('/Authors', [AuthorController::class, 'store']);
Route::put('/Authors/{id}', [AuthorController::class, 'update']);
Route::delete('/Authors/{id}', [AuthorController::class, 'destroy']);
// Route::delete('/books/{id}', [BookController::class, 'delete']);

// Route::resource('books', BookController::class)->except(
//     ['create', 'edit']
// );

// Route::resource('authors', AuthorController::class)->except(
//     ['create', 'edit']
// );
