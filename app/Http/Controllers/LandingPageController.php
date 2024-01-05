<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use App\Models\News;

class LandingPageController extends Controller
{
    public function index(){
        $newsAPI = Http::get('https://sugity.co.id/api/latest-news');

        $newsData = json_decode($newsAPI->body());

        return view('landing-page')->with([
           'news' => $newsData, 
        ]);
    }
    
}
