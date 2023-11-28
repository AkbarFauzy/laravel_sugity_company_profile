<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [LandingPageController::class, 'index']);

Route::get('/company-profile', function () {
    return view('company-profile');
});

Route::get('/coming-soon', function () {
    return view('coming-soon');
});

Route::get('/board-directors', function(){
    return view('board-directors');
});

Route::get('/company-history', function(){
    return view('company-history');
});

Route::get('/company-value', function(){
    return view('company-value');
});

Route::get('/products', function(){
    return view('products');
});

Route::get('company-plant', function(){
   return view('company-plant'); 
});