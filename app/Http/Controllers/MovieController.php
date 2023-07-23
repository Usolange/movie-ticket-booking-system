<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    public function getAllMovies()
    {



        $response = Http::withHeaders([
            'Accept' => '*/*',
            'User-Agent' => 'Thunder Client (https://www.thunderclient.com)',
            'X-RapidAPI-Key' => '220b84166dmsh2547d1b97ab74d4p1e5bdajsnfb45225f5788',
        ])
            ->get('https://online-movie-database.p.rapidapi.com/title/find?q=into%20the%20night');



        // return json_decode($response->body());
        //$movies = json_decode($response->body());
        // Pass the data to the welcome view
        //return view('welcome', compact('movies'));
        $movies = json_decode($response->body(), true); // Convert to an associative array
        $movies = $movies["results"];
        // Pass the data to the welcome view
        return view('welcome', compact('movies'));

    }
    public function searchMovies(Request $request)
    {
        $searchQuery = $request->input('query');
        $response = Http::withHeaders([
            'Accept' => '*/*',
            'User-Agent' => 'Thunder Client (https://www.thunderclient.com)',
            'X-RapidAPI-Key' => '220b84166dmsh2547d1b97ab74d4p1e5bdajsnfb45225f5788',
        ])
            ->get('https://online-movie-database.p.rapidapi.com/title/find?q=' . urlencode($searchQuery));

    }
}