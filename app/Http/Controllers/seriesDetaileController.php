<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class seriesDetaileController extends Controller
{

  public function detail($id) {
      // Make API request to fetch TV series details
      $response = Http::get("https://api.themoviedb.org/3/tv/$id", [
          'api_key' => '0269e1f69afd6ff169f8a6a2d9f0dc4d',
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
    $response = Http::get("https://api.themoviedb.org/3/tv/$id/videos", [
        'api_key' => '0269e1f69afd6ff169f8a6a2d9f0dc4d',
    ]);
    $TraillerS = $response->json();
    return view('components.seriesTrailler', ['Trailler' => $TraillerS]);
  }
  
}