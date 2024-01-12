<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\URL;

class FilmController extends Controller
{
    public function getFilms(Request $request)
{
    $filePath = storage_path('app/filmdata.json');

    // Read the JSON file
    $jsonContent = file_get_contents($filePath);

    // Check if decoding is successful
    $filmsData = json_decode($jsonContent, true);

    if ($filmsData === null) {
        // Handle the case where JSON decoding failed
        return response()->json(['error' => 'Failed to decode JSON file'], 500);
    }

    // Ensure 'results' key exists in the decoded data
    $films = isset($filmsData['results']) ? $filmsData['results'] : [];

    $perPage = 12;
    $currentPage = $request->input('page', 1);

    $paginatedData = array_slice($films, ($currentPage - 1) * $perPage, $perPage);

    $filmsPaginated = new LengthAwarePaginator(
        $paginatedData,
        count($films),
        $perPage,
        $currentPage,
        [
            'path' => url()->current(), // Set the base URL for pagination links
        ]
    );

    // Return the paginated data
    return view('films', ['films' => $filmsPaginated]);
}

}
