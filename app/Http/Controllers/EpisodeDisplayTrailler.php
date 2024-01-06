<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EpisodeDisplayTrailler extends Controller
{
    public function getEpisodsTrailler($seriesId, $seasonNumber,$episode_number)
    {
        
        $apiKey = env('API_KEY');
      
        // Make a request to the TMDb API
        $response = Http::get("https://api.themoviedb.org/3/tv/{$seriesId}/season/{$seasonNumber}/episode/{$episode_number}?api_key={$apiKey}");

        // Extract the JSON data from the response
        $data = $response->json();

        // Return the view 'displayEpisod' with the obtained data
        return view('components.episodTrailler', ['data' => $data]);
    }
}
