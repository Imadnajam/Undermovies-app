<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class searchController extends Controller
{
    public function filterC(){
        $apiKey = env('API_KEY');
        $searchTerm = $request->input('search', '');

        $response = Http::get("https://api.themoviedb.org/3/search/collection", [
            'api_key' => $apiKey,
            'query' => $searchTerm,
        ]);

        $collections = $response->json()['results'];

        return view('components.search', compact('collections', 'searchTerm'));
    }
    
}
