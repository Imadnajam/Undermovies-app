<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class HomeController extends Controller
{
    public function index()
    {
         
     
        $apiKey = env('API_KEY');

        $pageNumbers = [1, 2, 3, 4, 5,6,7,8,9]; 
        $typeSeries=['airing_today','on_the_air','popular','top_rated'] ;       
        
        $randomPage = $pageNumbers[array_rand($pageNumbers)];
        $randomType = $typeSeries[array_rand($typeSeries)];
        $response1 = Http::get("https://api.themoviedb.org/3/movie/popular", [
            'api_key' => $apiKey,
            'page' => $randomPage,
        ]);
        $response2 = Http::get("https://api.themoviedb.org/3/trending/movie/day", [
            'api_key' => $apiKey,
          
        ]);
        
        $response = Http::get("https://api.themoviedb.org/3/tv/{$randomType}", [
            'api_key' => $apiKey,
            'page' => $randomPage,
        ]);
        
        // Check if the request was successful (status code 200)
        if ($response->successful()) {
           
            $tvs = $response->json();
            $tops=$response1->json();
            $films=$response2->json();
            
            return view('layout.index',['films'=>$films,'tvs'=>$tvs,'tops'=>$tops]);
        } else {
           
            return redirect()->route('error');
        }
        
       
    }
}