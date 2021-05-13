<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\movie;

class movieController extends Controller
{
    public function index(){
        $movie= movie::all();
        return view("welcome", ['movies' => $movie]);
    }
}
