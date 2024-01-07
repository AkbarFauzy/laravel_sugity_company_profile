<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Admin\LandingPageController;
use App\Http\Controllers\Admin\AdminNewsController;
use App\Http\Controllers\Admin\AdminCSRController;
use App\Http\Controllers\Admin\AdminHistoryController;
use App\Http\Controllers\Admin\AdminBODController;
use App\Http\Controllers\Admin\AdminProductsController;
use App\Http\Controllers\Admin\AdminServicesController;
use App\Http\Controllers\Admin\AdminSlidersController;
use App\Http\Controllers\API\NewsController;
use App\Http\Controllers\API\CSRController;
use App\Http\Controllers\Admin\LoginController;


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


Route::get('/', [FrontendController::class, 'index']);

Route::get('/company-profile', function () {
    return view('company-profile');
});

Route::get('/coming-soon', function () {
    return view('coming-soon');
});

Route::get('/board-directors', [FrontendController::class, 'BoardOfDirectors']);
Route::get('/company-history', [FrontendController::class, 'CompanyHistory']);
Route::get('/products', [FrontendController::class, 'Products']);
Route::get('/products/{id}', [FrontendController::class, 'ProductsModal']);
Route::get('/products-vehicle', [FrontendController::class, 'ProductVehicles']);
Route::get('/products-part', [FrontendController::class, 'ProductParts']);
Route::get('/products-mold', [FrontendController::class, 'Mold']);

Route::get('/company-value', function(){
    return view('company-value');
});

Route::get('/company-business', function(){
    return view('company-business');
});


Route::get('/company-plant', function(){
   return view('company-plant'); 
});

Route::get('/news-page',[FrontendController::class, 'News']);
Route::get('/detail-news/{id}', [FrontendController::class, 'DetailNews']);

Route::get('/csr', [FrontendController::class, 'CSR']);


Route::get('/admin/login', function(){
    return view('admin/login');
})->name('login');



Route::post('/admin/actionLogin', [LoginController::class, 'actionLogin'])->name('actionLogin');
Route::get('/admin/actionLogout', [LoginController::class, 'actionLogout'])->name('actionLogout');


Route::prefix('admin')->group(function () {
    Route::get('dashboard', function(){
        return view('admin/dashboard');
    });
    
    Route::get('landing-page', [LandingPageController::class, 'view']);

    Route::get('sliders', [AdminSlidersController::class, 'view'])->name('admin.sliders');
    Route::get('sliders/create', [AdminSlidersController::class, 'create'])->name('admin.sliders.create');
    Route::post('sliders/add', [AdminSlidersController::class, 'add'])->name('admin.sliders.add');
    Route::get('sliders/edit/{id}', [AdminSlidersController::class, 'edit'])->name('admin.sliders.edit');
    Route::delete('sliders/delete/{id}',[AdminSlidersController::class, 'delete'])->name('admin.sliders.delete');

    Route::get('news',  [AdminNewsController::class, 'view'])->name('admin.news');
    Route::get('news/create',  [AdminNewsController::class, 'create'])->name('admin.news.create');
    Route::post('news/add', [AdminNewsController::class, 'add'])->name('admin.news.add');
    Route::get('news/edit/{id}', [AdminNewsController::class, 'edit'])->name('admin.news.edit');
    Route::delete('news/delete/{id}',[AdminNewsController::class, 'delete'])->name('admin.news.delete');
    Route::put('news/preview-form', [AdminNewsController::class, 'previewForm'])->name('admin.news.preview-form');
    Route::post('news/preview-form', [AdminNewsController::class, 'previewForm'])->name('admin.news.preview-form');
    Route::get('news/preview/{id}', [AdminNewsController::class, 'preview'])->name('admin.news.preview');
    Route::get('/get-uploaded-images', [AdminNewsController::class, 'getUploadedImages']);
    Route::post('/news/upload-content', [NewsController::class, 'UploadContent'])->name("ckeditor.news-content-upload");
    
    Route::get('csr',  [AdminCSRController::class, 'view'])->name('admin.csr');
    Route::get('csr/create',  [AdminCSRController::class, 'create'])->name('admin.csr.create');
    Route::post('csr/add', [AdminCSRController::class, 'add'])->name('admin.csr.add');
    Route::get('csr/edit/{id}', [AdminCSRController::class, 'edit'])->name('admin.csr.edit');
    Route::delete('csr/delete/{id}',[AdminCSRController::class, 'delete'])->name('admin.csr.delete');
    Route::put('csr/preview-form', [AdminCSRController::class, 'previewForm'])->name('admin.csr.preview-form');
    Route::post('csr/preview-form', [AdminCSRController::class, 'previewForm'])->name('admin.csr.preview-form');
    Route::get('csr/preview/{id}', [AdminCSRController::class, 'preview'])->name('admin.csr.preview');
    Route::get('/get-uploaded-images', [AdminCSRController::class, 'getUploadedImages']);
    Route::post('/csr/upload-content', [CSRController::class, 'UploadContent'])->name("ckeditor.csr-content-upload");

    Route::get('products',  [AdminProductsController::class, 'view'])->name('admin.products');
    Route::get('products/create',  [AdminProductsController::class, 'create'])->name('admin.products.create');
    Route::post('products/add', [AdminProductsController::class, 'add'])->name('admin.products.add');
    Route::get('products/edit/{id}', [AdminProductsController::class, 'edit'])->name('admin.products.edit');
    Route::post('product/image-view', [AdminProductsController::class, 'store'])->name('admin.products.image');
    // Route::post('products/upload-content', [CSRController::class, 'UploadContent'])->name("ckeditor.csr-content-upload");
    
    Route::get('bod', [AdminBODController::class, 'view'])->name('admin.bod');
    Route::get('bod/create', [AdminBODController::class, 'create'])->name('admin.bod.create');
    Route::get('bod/form', [AdminBODController::class, 'loadForm'])->name('admin.bod.form');
    Route::get('bod/form/{id}', [AdminBODController::class, 'loadForm'])->name('admin.bod.form.edit');
    Route::delete('bod/delete/{id}',[AdminBODController::class, 'delete'])->name('admin.bod.delete');

    Route::get('services', [AdminServicesController::class, 'view'])->name('admin.services');
    Route::get('services/create', [AdminServicesController::class, 'create'])->name('admin.services.create');
    Route::get('services/form', [AdminServicesController::class, 'loadForm'])->name('admin.services.form');
    Route::get('services/form/{id}', [AdminServicesController::class, 'loadForm'])->name('admin.services.form.edit');
    Route::delete('services/delete/{id}',[AdminServicesController::class, 'delete'])->name('admin.services.delete');

    Route::get('history', [AdminHistoryController::class, 'view'])->name('admin.history');
    Route::get('history/create',  [AdminHistoryController::class, 'create'])->name('admin.history.create');
    Route::get('history/form', [AdminHistoryController::class, 'loadForm'])->name('admin.history.form');
    Route::get('history/form/{id}', [AdminHistoryController::class, 'loadForm'])->name('admin.history.form.edit');
    Route::delete('history/delete/{id}',[AdminHistoryController::class, 'delete'])->name('admin.history.delete');
});


// Route::group(['prefix'=>'/admin', 'middleware' => ['auth:sanctum']], function (){

// });

