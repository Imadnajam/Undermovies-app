<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function filterC(Request $request)
    {
        // Get the API key from the environment configuration
        $apiKey = env('API_KEY');

        // Validate the search term (you can customize the rules)
        $request->validate([
            'search' => 'nullable|string|max:255',
        ]);

        // Get the search term from the request
        $searchTerm = $request->input('search', '');

        // Make the API request to TMDB
   
        $response = Http::get("https://api.themoviedb.org/3/search/movie", [
            'api_key' => $apiKey,
            'query' => $searchTerm,
        ]);

        // Check if the API request was successful
        if ($response->successful()) {
            // Retrieve the collections from the API response
            $collections = $response->json()['results'];

            // Return the view with the collections and search term
            return view('components.search', compact('collections', 'searchTerm'));
        } else {
            // Handle the case where the API request fails
            return view('components.search')->with('error', 'Failed to retrieve data from TMDB API');
        }
    }
}
