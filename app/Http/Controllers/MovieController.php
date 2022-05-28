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
            'title' => 'Home',
        ]);
    }

    public function show($id)
    {
        $movie = Movie::find($id);

        return view('movies.index', [
            'movie' => $movie,
            'episodes' => $movie->episodes()->paginate(3),
            'title' => $movie->title,
        ]);
    }

    public function showGenre($id)
    {
        $genre = Genre::find($id);
        $movies = Movie::where('genre_id', $id)->get();

        return view('movies.genre', [
            'movies' => $movies,
            'genre' => $genre,
            'title' => $genre->name,
        ]);
    }
}
