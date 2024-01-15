<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

class FrontendController extends Controller
{
    public function index(){
        $newsAPI = Http::get(env('API_DOMAIN').'/api/latest-news');
        $csrAPI = Http::get(env('API_DOMAIN').'/api/latest-csr');
        $serviceAPI = Http::get(env('API_DOMAIN').'/api/services');
        $slidersAPI = Http::get(env('API_DOMAIN').'/api/sliders/pages/Home');

        $newsData = json_decode($newsAPI->body());
        $csrData = json_decode($csrAPI->body());
        $serviceData = json_decode($serviceAPI->body());
        $slidersData = json_decode($slidersAPI->body());

        $newsDataWithType = collect($newsData->data)->map(function ($item) {
            $item->type = 'news';
            return $item;
        });

        $csrDataWithType = collect($csrData->data)->map(function ($item) {
            $item->type = 'csr';
            return $item;
        });

        $combinedData = $newsDataWithType->merge($csrDataWithType);
        $sortedData = $combinedData->sortByDesc('created_at')->values()->all();

        return view('landing-page')->with([
           'news' => $sortedData, 
           'services' => $serviceData,
           'sliders' => $slidersData,
        ]);
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
        $slidersAPI = Http::get(env('API_DOMAIN').'/api/sliders/pages/Products');
        
        $productsData = json_decode($productsAPI->body());
        $vehiclesData = json_decode($vehiclesAPI->body());
        $partsData = json_decode($partsAPI->body());
        $moldData = json_decode($moldAPI->body());
        $slidersData = json_decode($slidersAPI->body());

        return view('products')->with([
            'products' => $productsData,
            'vehicles' => $vehiclesData,
            'parts' => $partsData,
            'mold' => $moldData,
            'sliders' => $slidersData,
        ]);
    }

    public function ProductsModal($id){
        $productsAPI = Http::get(env('API_DOMAIN').'/api/products/'.$id);
        $productsData = json_decode($productsAPI);

        $gallery = $productsData->data->gallery;

        $interiorExists = false;
        $exteriorExists = false;
        $view360Exists = false;

        $interiors = [];
        $exteriors = [];
        $view360 = [];

        foreach ($gallery as $image) {
            if ($image->type === 'interior') {
                $interiorExists = true;
                $interiors[] = $image->img;
            } elseif ($image->type === 'exterior') {
                $exteriorExists = true;
                $exteriors[] = $image->img;
            }elseif($image->type === '360'){
                $view360Exists = true;
                $view360[] = $image->img;
            }
        }

        usort($view360, function($a, $b) {
            try{
                $a = (int)explode('.', $a)[0];
                $b = (int)explode('.', $b)[0];
                return $a - $b;
            }catch(\Exception $exception){
                
            }
        });

        return view('products-modal')->with([
            'products' => $productsData,
            'isInterior' => $interiorExists,
            'isExterior' => $exteriorExists,
            'is360' => $view360Exists,
            'interiors' => $interiors,
            'exteriors' => $exteriors,
            'view360' => $view360,
        ]);
    }

    public function ProductVehicles(){
        $vehiclesAPI = Http::get(env('API_DOMAIN').'/api/vehicles');
        $vehiclesData = json_decode($vehiclesAPI->body());

        $publicTransportAPI = Http::get(env('API_DOMAIN').'/api/public-transport');
        $publicTransportData = json_decode($publicTransportAPI->body());

        $healthcareVehiclesAPI = Http::get(env('API_DOMAIN').'/api/healthcare-vehicles');
        $healthcareVehiclesData = json_decode($healthcareVehiclesAPI->body());

        $exportVehiclesAPI = Http::get(env('API_DOMAIN').'/api/export-vehicles');
        $exportVehiclesData = json_decode($exportVehiclesAPI->body());

        $otherVehiclesAPI = Http::get(env('API_DOMAIN').'/api/other-vehicles');
        $otherVehiclesData = json_decode($otherVehiclesAPI->body());

        $slidersAPI = Http::get(env('API_DOMAIN').'/api/sliders/pages/Vehicle Business');
        $slidersData = json_decode($slidersAPI->body());

        
        return view('product-vehicle-business')->with([
            'vehicles' => $vehiclesData,
            'publicTransport' => $publicTransportData,
            'healthcareVehicles' => $healthcareVehiclesData,
            'exportVehicles'=> $exportVehiclesData,
            'otherVehicles'=> $otherVehiclesData,
            'sliders' => $slidersData,
        ]);

    }

    public function ProductParts(){
        $partsAPI = Http::get(env('API_DOMAIN').'/api/parts');
        $partsData = json_decode($partsAPI->body());

        $partInteriorAPI = Http::get(env('API_DOMAIN').'/api/interior-parts');
        $partInteriorData = json_decode($partInteriorAPI->body());

        $partExteriorAPI = Http::get(env('API_DOMAIN').'/api/exterior-parts');
        $partExteriorData = json_decode($partExteriorAPI->body());

        $slidersAPI = Http::get(env('API_DOMAIN').'/api/sliders/pages/Part Business');
        $slidersData = json_decode($slidersAPI->body());

        return view('product-part-business')->with([
            'parts' => $partsData,
            'interiors' => $partInteriorData,
            'exteriors' => $partExteriorData,
            'sliders' => $slidersData,
        ]);
    }

    public function Mold(){
        $moldAPI = Http::get(env('API_DOMAIN').'/api/mold');
        $moldData = json_decode($moldAPI->body());

        $slidersAPI = Http::get(env('API_DOMAIN').'/api/sliders/pages/Mold');
        $slidersData = json_decode($slidersAPI->body());

        return view('product-mold-business')->with([
            'mold' => $moldData,
            'sliders' => $slidersData,
        ]);

    }
    
    public function CSR(){
        $csrAPI = Http::get(env('API_DOMAIN').'/api/csr/');
        
        $csrData = json_decode($csrAPI);
        $randomCSR = $csrData->data;
        shuffle($randomCSR);

        return view('csr')->with([
            'csr' => $csrData,
            'randomCSR' => $randomCSR
        ]);
    }

    public function DetailCSR($id){
        $currentCSRAPI = Http::get(env('API_DOMAIN').'/api/csr/'.$id);
        $csrAPI = Http::get(env('API_DOMAIN').'/api/latest-csr/');

        $currentCSRData = json_decode($currentCSRAPI->body());
        $csrData = json_decode($csrAPI->body());

        if($currentCSRData->success){     
            return view('detail-csr')->with([
                'current_csr' => $currentCSRData, 
                'csr' => $csrData
            ]);
        }else{
            abort(404);
        }
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

    public function DetailNews($id){
        $currentNewsAPI = Http::get(env('API_DOMAIN').'/api/news/'.$id);
        $newsAPI = Http::get(env('API_DOMAIN').'/api/latest-news/');

        $currentNewsData = json_decode($currentNewsAPI->body());
        $newsData = json_decode($newsAPI->body());
        

        if($currentNewsData->success){     
            return view('detail-news')->with([
                'current_news' => $currentNewsData, 
                'news' => $newsData
            ]);
        }else{
            abort(404);
        }
    }


}
