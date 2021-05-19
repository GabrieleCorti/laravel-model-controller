<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = movie::all();

        return response()->json($movies);
    }

    public function show(movie $movie)
    {
        
        return response()->json($movie);
    }
}
