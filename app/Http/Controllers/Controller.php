<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

abstract class Controller
{
    
    function fetchJokes()
    {
        $response = Http::get('https://api.chucknorris.io/jokes/random');
        return $response->json();
    }

    function fetchMultipleJokes($count = 5)
    {
        $jokes = [];
        for ($i = 0; $i < $count; $i++) {
            $jokes[] = $this->fetchJokes();
        }
        return $jokes;
    }
}
