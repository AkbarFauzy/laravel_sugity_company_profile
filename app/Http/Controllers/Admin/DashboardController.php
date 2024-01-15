<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
   
   public function view(){
      $productsAPI = Http::get(env('API_DOMAIN').'/api/products');
      $productsData = json_decode($productsAPI->body());
      
      $newsAPI = Http::get(env('API_DOMAIN').'/api/latest-news');
      $newsData = json_decode($newsAPI->body());

      $csrAPI = Http::get(env('API_DOMAIN').'/api/latest-csr');
      $csrData = json_decode($csrAPI);

      $servicesAPI = Http::get(env('API_DOMAIN').'/api/services');
      $servicesData = json_decode($servicesAPI);

      return view('admin/dashboard')->with([
         'products' => $productsData,
         'news' => $newsData,
         'csr' => $csrData,
         'services' => $servicesData
      ]);
   }
}
