<?php

namespace App\Http\Controllers;
use App\Models\Film;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class MovieController extends Controller
{
    public function detail($id)
{
    

    // Find the film with the matching IMDb ID in your JSON data
    $filePath = storage_path('app/filmdata.json');
    $jsonContent = file_get_contents($filePath);
    $films = json_decode($jsonContent, true);

    // Search for the film with the given IMDb ID
    $film = collect($films)->firstWhere('imdbID', $id);

    if (!$film) {
        abort(404); // or handle the case where the film is not found
    }

    return view('components.detailmovie', ['film' => $film]);
}

public function detailI($id)
{
    $api_key = '0269e1f69afd6ff169f8a6a2d9f0dc4d'; // Replace 'your_api_key' with your actual API key

    // Make a request to the Movie Database API
    $response = Http::get("https://api.themoviedb.org/3/movie/{$id}?api_key={$api_key}");

    // Check if the request was successful (status code 200)
    if ($response->successful()) {
        // Decode the JSON response
        $movie = $response->json();

        // Pass the movie data to the view
        return view('components.indexMD', ['movie' => $movie]);
    } else {
        // If the request was not successful, handle the error (e.g., show an error view)
        return view('error');
    }
}

public function watchNow($id)
{
    $apiKey = '0269e1f69afd6ff169f8a6a2d9f0dc4d'; // Replace with your TMDb API key
    $url = "https://api.themoviedb.org/3/movie/{$id}/videos";
    $title = request()->input('title');

    try {
        $response = Http::get($url, [
            'api_key' => $apiKey,
        ]);

        $data = $response->json();

        // Check if there are videos and if the first one is a trailer
        if (isset($data['results']) && !empty($data['results'])) {
            $trailerKey = $data['results'][0]['key'];
            $trailerUrl = "https://www.youtube.com/embed/{$trailerKey}";

            return view('components.watchnow', ['trailer_url' => $trailerUrl, 'title' => $title]);
        }
        
        // No trailers found
        return view('components.trailer_not_found');
    } catch (\Exception $e) {
        // Handle the exception (e.g., log it) and return an error view
        return view('components.error', ['message' => 'An error occurred while fetching the trailer.']);
    }
}

}
