<?php

namespace App\Http\Controllers;

class JokeController extends Controller
{
    public function index()
    {
        # Meerdere chucknorris jokes worden opgehaald, gelimiteerd tot 5
        $jokes = $this->fetchMultipleJokes(5);
        return view('jokes.index', compact('jokes'));
    }
}
