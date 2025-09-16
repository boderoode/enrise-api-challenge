<?php

namespace App\Http\Controllers;

class JokeController extends Controller
{
    public function index()
    {
        # Een enkele chucknorris joke wordt opgehaald
        $joke = $this->fetchJokes();

        # Meerdere chucknorris jokes worden opgehaald, gelimiteerd tot 5
        $jokes = $this->fetchMultipleJokes(5);
        return view('jokes.index', compact('joke', 'jokes'));
    }
}
