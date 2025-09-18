<?php

namespace App\Http\Controllers;

class JokeController extends Controller
{
    public function index()
    {
        
    }

    public function fiveJokes()
    {
        $fiveJokes = $this->fetchMultipleJokes(5);
        return view('jokes.five', compact('fiveJokes'));
    }

    public function twelveJokes()
    {
        $twelveJokes = $this->fetchMultipleJokes(12);
        return view('jokes.twelve', compact('twelveJokes'));
    }
}
