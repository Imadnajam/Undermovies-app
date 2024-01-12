<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\URL;


class AnimeController extends Controller
{
    public function getAnime(Request $request)
    {
        // Path to your JSON file
        $filePath = storage_path('app/anime.json');
    
        // Read the JSON file
        $jsonContent = file_get_contents($filePath);
    
        // Convert JSON string to an array
        $animes = json_decode($jsonContent, true);

        // Get the search query from the request
        $search = $request->input('search');
    
        // Perform the search query on the 'Name' column
        if ($search) {
            $animes = array_filter($animes, function ($anime) use ($search) {
                return stristr($anime['Name'], $search);
            });
        }
    
        // Paginate the array with 12 items per page
        $perPage = 12;
        $currentPage = $request->input('page', 1);
    
        $paginatedData = array_slice($animes, ($currentPage - 1) * $perPage, $perPage);
    
        $animesPaginated = new LengthAwarePaginator(
            $paginatedData,
            count($animes),
            $perPage,
            $currentPage,
            [
                'path' => url()->current(), // Set the base URL for pagination links
            ]
        );
    
        return view('layout.anime', ['animes' => $animesPaginated, 'search' => $search]);
    }
}
