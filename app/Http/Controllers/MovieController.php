<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        return view('home', [
            'movies' => Movie::all(),
            'genres' => Genre::all(),
        ]);
    }

    public function show($id)
    {
        return view('movies.index', [
            'movie' => Movie::find($id),
            'episodes' => Movie::find($id)->episodes()->paginate(3),
        ]);
    }

    public function showGenre($id)
    {
        $movies = Movie::where('genre_id', $id)->get();

        return view('movies.genre', [
            'movies' => $movies,
            'genre' => Genre::find($id),
        ]);
    }
}
