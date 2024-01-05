<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

class FrontendController extends Controller
{
    public function index(){
        $newsAPI = Http::get(env('API_DOMAIN').'/api/latest-news');
        $serviceAPI = Http::get(env('API_DOMAIN').'/api/services');

        $newsData = json_decode($newsAPI->body());
        $serviceData = json_decode($serviceAPI->body());

        return view('landing-page')->with([
           'news' => $newsData, 
           'services' => $serviceData,
        ]);
    }

    public function DetailNews($id){
        $currentNewsAPI = Http::get(env('API_DOMAIN').'/api/news/'.$id);
        $newsAPI = Http::get(env('API_DOMAIN').'/api/news/');

        $currentNewsData = json_decode($currentNewsAPI->body());
        $newsData = json_decode($newsAPI->body());
        

        if($newsData->success){     
            return view('detail-news')->with([
                'current_news' => $currentNewsData, 
                'news' => $newsData
            ]);
        }else{
            abort(404);
        }
    }

    public function BoardOfDirectors(){
        $directors = Http::get(env('API_DOMAIN').'/api/directors');
        $president_directors = Http::get(env('API_DOMAIN').'/api/president-director');
        $commisioners = Http::get(env('API_DOMAIN').'/api/commisioners');
        $vice_president = Http::get(env('API_DOMAIN'). '/api/vice-president');

        // $bodAPI = Http::get(env('API_DOMAIN').'/api/bod');

        $directorsData = json_decode($directors->body());
        $president_directorsData = json_decode($president_directors->body());
        $commisionersData = json_decode($commisioners->body());
        $vice_presidentData = json_decode($vice_president->body());


        return view('board-director')->with([
           'directors' => $directorsData, 
           'president_directors' => $president_directorsData,
           'commisioners' => $commisionersData,
           'vice_president' => $vice_presidentData

        ]);

    }

    public function CompanyHistory(){
        $historyAPI = Http::get(env('API_DOMAIN').'/api/history');
        $historyByYearAPI = Http::get(env('API_DOMAIN').'/api/historyByYear');
        $historyData = json_decode($historyAPI->body());
        $historyByYearData = json_decode($historyByYearAPI->body());
        $uniqueYears = [];
        
        foreach ($historyData->data as $history) {
            $year = $history->year;
            if (!in_array($year, $uniqueYears)) {
                $uniqueYears[] = $year; // Add the year to the list of unique years
            }
        }

        return view('company-history')->with([
            'history'=>$historyByYearData,
            'uniqueYears'=>$uniqueYears,
        ]);
    }

    public function Products(){
        $productsAPI = Http::get(env('API_DOMAIN').'/api/products');
        $vehiclesAPI = Http::get(env('API_DOMAIN').'/api/vehicles');
        $partsAPI = Http::get(env('API_DOMAIN').'/api/parts');
        $moldAPI = Http::get(env('API_DOMAIN').'/api/mold');
        
        $productsData = json_decode($productsAPI->body());
        $vehiclesData = json_decode($vehiclesAPI->body());
        $partsData = json_decode($partsAPI->body());
        $moldData = json_decode($moldAPI->body());

        return view('products')->with([
            'products' => $productsData,
            'vehicles' => $vehiclesData,
            'parts' => $partsData,
            'mold' => $moldData,
        ]);
    }

    public function ProductsModal($id){
        $productsAPI = Http::get(env('API_DOMAIN').'/api/products/'.$id);
        $productsData = json_decode($productsAPI);

        $gallery = $productsData->data->gallery;

        $interiorExists = false;
        $exteriorExists = false;

        $interiors = [];
        $exteriors = [];

        foreach ($gallery as $image) {
            if ($image->type === 'interior') {
                $interiorExists = true;
                $interiors[] = $image->img;
            } elseif ($image->type === 'exterior') {
                $exteriorExists = true;
                $exteriors[] = $image->img;
            }
        }

        return view('products-modal')->with([
            'products' => $productsData,
            'isInterior' => $interiorExists,
            'isExterior' => $exteriorExists,
            'interiors' => $interiors,
            'exteriors' => $exteriors,
        ]);
    }

    public function Mold(){
        $moldAPI = Http::get(env('API_DOMAIN').'/api/mold');
        $moldData = json_decode($moldAPI->body());

        return view('product-mold-business')->with([
            'mold' => $moldData,
        ]);

    }
    
    public function CSR(){
        $csrAPI = Http::get(env('API_DOMAIN').'/api/csr/');
        $csrData = json_decode($csrAPI);

        return view('csr')->with([
            'csr' => $csrData,
        ]);
    }

    public function News(){
        $newsAPI = Http::get(env('API_DOMAIN').'/api/latest-news');
    
        $newsData = json_decode($newsAPI->body());
        $randomNews = $newsData->data;
        shuffle($randomNews);
        return view('news')->with([
           'news' => $newsData, 
           'randomNews' => $randomNews,
        ]);
    }

}
