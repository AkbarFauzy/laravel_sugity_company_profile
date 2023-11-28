<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\NewsController;
use App\Http\Controllers\API\BODController;
use App\Http\Controllers\API\CSRController;
use App\Http\Controllers\API\EventController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/products',[ProductController::class, 'GetProducts']);
Route::get('/product/{id}', [ProductController::class, 'GetProductById']);
Route::get('/news', [NewsController::class, 'GetNews']);
Route::get('/news/{id}', [NewsController::class, 'GetNewsById']);
Route::get('/latest-news', [NewsController::class, 'GetLatestNews']);
Route::get('/csr', [CSRController::class, 'GetCSR']);
Route::get('/csr/{id}', [CSRController::class, 'GetCSRById']);
Route::get('/events', [EventController::class, 'GetEvents']);
Route::get('/event/{id}', [EventController::class, 'GetEventById']);
Route::get('/directors', [BODController::class, 'GetDirectors']);
Route::get('/commissioners', [BODController::class, 'GetCommissioners']);
Route::get('/president-director', [BODController::class, 'GetPresidentDirector']);
Route::get('/vice-president', [BODController::class,'GetExecutiveVicePresident']);



