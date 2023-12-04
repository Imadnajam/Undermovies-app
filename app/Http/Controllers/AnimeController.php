<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimeController extends Controller
{
    public function getAnime()
    {
        // Path to your JSON file
        $filePath = storage_path('app/anime.json');

        // Read the JSON file
        $jsonContent = file_get_contents($filePath);

        // Convert JSON string to an array
        $animes = json_decode($jsonContent, true);

        // Return the JSON data
        return view('anime',['animes'=>$animes]);
    }
}
