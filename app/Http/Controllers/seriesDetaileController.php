<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class seriesDetaileController extends Controller
{
  
  public function detail($id) {
      // Make API request to fetch TV series details
      $apiKey = env('API_KEY');
      $response = Http::get("https://api.themoviedb.org/3/tv/$id", [
          'api_key' => $apiKey,
      ]);
  
      // Check if the request was successful (status code 200)
      if ($response->successful()) {
          // Get the JSON-decoded data from the response
          $tvSeriesData = $response->json();
  
          // Pass the data to the view
          return view('components.seriesDetaile', ['tvSeriesData' => $tvSeriesData]);
      } else {
          // Handle the error, for example, redirect to an error page
          return redirect()->route('error');
      }
  }
  public function whatchTrailler($id){
    $apiKey = env('API_KEY');
    $response = Http::get("https://api.themoviedb.org/3/tv/$id/videos", [
        'api_key' => $apiKey,
    ]);
    $TraillerS = $response->json();
    return view('components.seriesTrailler', ['Trailler' => $TraillerS]);
  }
  
}