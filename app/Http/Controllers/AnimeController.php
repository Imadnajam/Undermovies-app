<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\URL;
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
    
        // Paginate the array with 10 items per page
        $perPage = 12;
        $currentPage = request()->input('page', 1);
    
        $paginatedData = array_slice($animes, ($currentPage - 1) * $perPage, $perPage);
    
        $animesPaginated = new LengthAwarePaginator(
            $paginatedData,
            count($animes),
            $perPage,
            $currentPage,
            [
                'path' => URL::current(), // Set the base URL for pagination links
            ]
        );
    
        return view('anime', ['animes' => $animesPaginated]);
    }
    
}
