<?php

namespace App\Http\Controllers;
use App\Models\Film;

use Illuminate\Http\Request;

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
}
