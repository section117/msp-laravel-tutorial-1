<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function getMovieByID($id) {
        //session(['movie_id' => $id]);

        $m = Movie::find($id);

        return view("movies.movieByID", ['movie' => $m]);
    }

    public function getMovieCat() {
        dd(session('movie_id'));
        return view("movies.movieCat");
    }
}
