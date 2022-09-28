<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class ComingSoonController extends Controller
{
    public function index() {

        $movies = Movie::where('avaible', 0)->get();

        $navLinks = config('navLinks');

        return view('movies', compact('movies'), ['links' => $navLinks]);
    }
}
