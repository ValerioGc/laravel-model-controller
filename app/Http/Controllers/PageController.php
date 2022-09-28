<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class PageController extends Controller
{
    public function index() {

          $movies = Movie::all();
//        $movies = Movie::orderby('status' == 'Coming Soon')->get();


        return view('home', compact('movies'));
    }
}
