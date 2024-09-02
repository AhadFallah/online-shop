<?php

use App\Http\Controllers\Api\CommentController;
use App\Http\Controllers\Api\HomeController;
use App\Http\Controllers\Api\UserAuthController;
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
Route::middleware(['auth:sanctum'])->group(function () {

  Route::post('/bookmark', [HomeController::class, 'bookmark']);
  Route::post('/comment', [CommentController::class, 'store']);
  Route::get('/allBookmarks', [HomeController::class, 'get_bookmarks']);
});
Route::get('/home', [HomeController::class, 'home']);
Route::get('/new', [HomeController::class, 'newest']);

Route::post('register', [UserAuthController::class, 'register']);
Route::post('login', [UserAuthController::class, 'login']);
Route::post('logout', [UserAuthController::class, 'logout'])
  ->middleware('auth:sanctum');
