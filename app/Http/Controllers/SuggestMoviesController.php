<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class SuggestMoviesController extends Controller
{
    public function index()
    {
        $navLinks = config('navLinks');

        return view('suggestMovies', ['links' => $navLinks]);
    }

    public function addMovie() {
        $newMovie = new Movie();
        $newMovie->title = '';
        $newMovie->original_title = '';
        $newMovie->nationality = "";
        $newMovie->date = "";
        $newMovie->vote = "";
        $newMovie->avaible = "";
        $newMovie->save();
    }
}
