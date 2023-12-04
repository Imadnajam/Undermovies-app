<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class detailanimeController extends Controller
{
    
    public function detail($id)
{
    

    // Find the film with the matching IMDb ID in your JSON data
    $filePath = storage_path('app/anime.json');
    $jsonContent = file_get_contents($filePath);
    $animes = json_decode($jsonContent, true);

    // Search for the film with the given IMDb ID
    $anime = collect($animes)->firstWhere('Aid', $id);

    if (!$anime) {
        abort(404); // or handle the case where the film is not found
    }

    return view('components.detailanime', ['anime' => $anime]);
}
}
