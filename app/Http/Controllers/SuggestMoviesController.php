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
}
