<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class AvaibleMoviesController extends Controller
{
    public function index() {

        $movies = Movie::where('avaible', 1)->get();

        $navLinks = config('navLinks');

        return view('movies', compact('movies'), ['links' => $navLinks]);
    }
}
