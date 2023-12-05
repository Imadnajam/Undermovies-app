<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function getFilms()
    {
        
        $filePath = storage_path('app/filmdata.json');

        // Read the JSON file
        $jsonContent = file_get_contents($filePath);

        // Convert JSON string to an array
        $films = json_decode($jsonContent, true);

        // Return the JSON data
        return view('films',['films'=>$films]);
    }
}
