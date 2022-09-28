<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class MoviesController extends Controller
{
    public function index() {

        $movies = Movie::all();

        $navLinks = config('navLinks');

        return view('movies', compact('movies'), ['links' => $navLinks]);
    }
}
