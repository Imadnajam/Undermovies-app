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

         $response = Http::get("https://api.themoviedb.org/3/tv/top_rated", [
            'api_key' => '0269e1f69afd6ff169f8a6a2d9f0dc4d',
        ]);
        $filePath = storage_path('app/home1.json');
        $jsonContent = file_get_contents($filePath);
        $tops = json_decode($jsonContent, true);
        // Check if the request was successful (status code 200)
        if ($response->successful()) {
            // Get the JSON-decoded data from the response
            $tvs = $response->json();
    
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
