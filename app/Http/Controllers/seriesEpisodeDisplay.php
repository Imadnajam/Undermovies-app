<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class seriesEpisodeDisplay extends Controller
{
    public function getEpisods($seriesId, $seasonNumber)
    {
        $apiKey = '0269e1f69afd6ff169f8a6a2d9f0dc4d';

        // Make a request to the TMDb API
        $response = Http::get("https://api.themoviedb.org/3/tv/{$seriesId}/season/{$seasonNumber}?api_key={$apiKey}");

        // Extract the JSON data from the response
        $data = $response->json();

        // Return the view 'displayEpisod' with the obtained data
        return view('components.displayEpisod', ['data' => $data]);
    }
}
