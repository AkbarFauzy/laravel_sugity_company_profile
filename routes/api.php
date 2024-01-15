<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\NewsController;
use App\Http\Controllers\API\SlidersController;
use App\Http\Controllers\API\BODController;
use App\Http\Controllers\API\CSRController;
use App\Http\Controllers\API\EventController;
use App\Http\Controllers\API\ServicesController;
use App\Http\Controllers\API\HistoryController;
use App\Http\Controllers\API\Authentication;
use App\Http\Controllers\Admin\AdminNewsController;

/*
|--------------------------------------------------------------------------
| API Routes4
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

Route::post('/auth/login', [Authentication::class, 'login']);
Route::delete('/auth/logout', [Authentication::class, 'logout'])->middleware('auth:sanctum');

Route::group(['middleware' => ['auth:sanctum']], function () {
});

Route::get('/products',[ProductController::class, 'GetProducts']);
Route::get('/products/{id}', [ProductController::class, 'GetProductById']);
Route::get('/vehicles', [ProductController::class, 'GetVehicles']);
Route::get('/public-transport', [ProductController::class, 'GetPublicTransport']);
Route::get('/healthcare-vehicles', [ProductController::class, 'GetHealthcareVehicles']);
Route::get('/export-vehicles', [ProductController::class, 'GetExportVehicles']);
Route::get('/other-vehicles', [ProductController::class, 'GetOtherVehicles']);
Route::get('/parts', [ProductController::class, 'GetParts']);
Route::get('/interior-parts', [ProductController::class, 'GetInteriorParts']);
Route::get('/exterior-parts', [ProductController::class, 'GetExteriorParts']);
Route::get('/mold', [ProductController::class, 'GetMold']);
Route::get('/products-360/{id}', [ProductController::class, 'Get360']);
Route::post('/products/add', [ProductController::class, 'AddProduct'])->name('api.products.add');
Route::put('/products/udpate/{id}', [ProductController::class, 'UpdateProduct'])->name('api.products.update');
Route::delete('/products/delete/{id}', [ProductController::class, 'DeleteProduct'])->name('api.products.delete');
Route::delete('/products/delete-360/{id}', [ProductController::class, 'DeleteProduct360'])->name('api.products.delete-360');

Route::get('/sliders', [SlidersController::class, 'GetSliders']);
Route::get('/sliders/pages/{page}', [SlidersController::class, 'GetSlidersByPage']);
Route::get('/sliders/{id}', [SlidersController::class, 'GetSlidersById']);
Route::post('/sliders/add', [SlidersController::class, 'AddSliders'])->name('api.sliders.add');
Route::put('/sliders/update/{id}', [SlidersController::class, 'UpdateSliders'])->name('api.sliders.update');
Route::delete('/sliders/delete/{id}', [SlidersController::class, 'DeleteSliders'])->name('api.sliders.delete');

Route::get('/news', [NewsController::class, 'GetNews']);
Route::get('/news/get-all', [NewsController::class, 'GetAllNews']);
Route::get('/news/{id}', [NewsController::class, 'GetNewsById']);
Route::post('/news/add', [NewsController::class, 'AddNews'])->name('api.news.add');
Route::put('/news/update/{id}', [NewsController::class, 'UpdateNews'])->name('api.news.update');
Route::put('/news/publish/{id}', [NewsController::class, 'TogglePublishNews'])->name('admin.api.news.publish');
Route::delete('/news/delete/{id}', [NewsController::class, 'DeleteNews'])->name('api.news.delete');
Route::post('/news/delete/gallery/',  [NewsController::class, 'DeleteNewsGallery'])->name('admin.news.delete.gallery');
Route::get('/latest-news', [NewsController::class, 'GetLatestNews']);

Route::get('/csr', [CSRController::class, 'GetCSR']);
Route::get('/csr/get-all', [CSRController::class, 'GetAllCSR']);
Route::get('/csr/{id}', [CSRController::class, 'GetCSRById']);
Route::post('/csr/add', [CSRController::class, 'AddCSR'])->name('api.csr.add');
Route::put('/csr/update/{id}', [CSRController::class, 'UpdateCSR'])->name('api.csr.update');
Route::put('/csr/publish/{id}', [CSRController::class, 'TogglePublishCSR'])->name('admin.api.csr.publish');
Route::delete('/csr/delete/{id}', [CSRController::class, 'DeleteCSR'])->name('api.csr.delete');
Route::post('/csr/delete/gallery',  [CSRController::class, 'DeleteCSRGallery'])->name('admin.csr.delete.gallery');
Route::get('/latest-csr', [CSRController::class, 'GetLatestCSR']);

Route::get('/events', [EventController::class, 'GetEvents']);
Route::get('/event/{id}', [EventController::class, 'GetEventById']);

Route::get('/directors', [BODController::class, 'GetDirectors']);
Route::get('/commissioners', [BODController::class, 'GetCommissioners']);
Route::get('/president-director', [BODController::class, 'GetPresidentDirector']);
Route::get('/vice-president', [BODController::class,'GetExecutiveVicePresident']);

Route::get('/bod', [BODController::class, 'GetBOD']);
Route::get('/bod/{id}', [BODController::class, 'GetBODById']);
Route::post('/bod/add', [BODController::class, 'AddBOD'])->name('api.bod.add');
Route::put('/bod/update/{id}', [BODController::class, 'UpdateBOD'])->name('api.bod.update');
Route::delete('/bod/delete/{id}', [BODController::class, 'DeleteBOD'])->name('api.bod.delete');

Route::get('/services', [ServicesController::class, 'GetServices']);
Route::get('/services/{id}', [ServicesController::class, 'GetServicesById']);
Route::post('/services/add', [ServicesController::class, 'AddServices'])->name('api.services.add');
Route::put('/services/update/{id}', [ServicesController::class, 'UpdateServices'])->name('api.services.update');
Route::delete('/services/delete/{id}', [ServicesController::class, 'DeleteServices'])->name('api.services.delete');

Route::get('/history', [HistoryController::class, 'GetAllHistory']);
Route::get('/historyByYear', [HistoryController::class, 'GetHistory']);
Route::get('/history/{id}',[HistoryController::class, 'GetHistoryById']);
Route::post('/history/add', [HistoryController::class, 'AddHistory'])->name('api.history.add');
Route::put('/history/update/{id}', [HistoryController::class, 'UpdateHistory'])->name('api.history.update');
Route::delete('/history/delete/{id}', [HistoryController::class, 'DeleteHistory'])->name('api.history.delete');

// Route::post('')






