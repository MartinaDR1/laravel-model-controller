<?php

namespace App\Http\Controllers\Guest;


use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function movies()
    {
        $movies = Movie::all();
        //var_dump($movies);
        return view('movies', compact("movies"));
    }

    public function contacts()
    {
        return view('contacts');
    }
}
