<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class HomeController extends Controller
{
    public function index()
    {
         
         $filePath = storage_path('app/home.json');
         $jsonContent = file_get_contents($filePath);
         $films = json_decode($jsonContent, true);

         /////////////////////////////////////
     
        $apiKey = env('API_KEY');

        $pageNumbers = [1, 2, 3, 4, 5,6,7,8,9]; // Replace with your desired page numbers
        $typeSeries=['airing_today','on_the_air','popular','top_rated'] ;       
        
        $randomPage = $pageNumbers[array_rand($pageNumbers)];
        $randomType = $typeSeries[array_rand($typeSeries)];
        $response1 = Http::get("https://api.themoviedb.org/3/movie/popular", [
            'api_key' => $apiKey,
            'page' => $randomPage,
        ]);
        
        $response = Http::get("https://api.themoviedb.org/3/tv/{$randomType}", [
            'api_key' => $apiKey,
            'page' => $randomPage,
        ]);
        
        // Check if the request was successful (status code 200)
        if ($response->successful()) {
            // Get the JSON-decoded data from the response
            $tvs = $response->json();
            $tops=$response1->json();
    
            // Pass the data to the view
            return view('index',['films'=>$films,'tvs'=>$tvs,'tops'=>$tops]);
        } else {
            // Handle the error, for example, redirect to an error page
            return redirect()->route('error');
        }
        
         ///////////////////////////////////////
        

         // Return the JSON data
        
       
    }
}