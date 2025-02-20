<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $movies = [
            ['title' => 'Inception', 'year' => 2010, 'genre' => 'Sci-Fi'],
            ['title' => 'Interstellar', 'year' => 2014, 'genre' => 'Sci-Fi'],
            ['title' => 'The Dark Knight', 'year' => 2008, 'genre' => 'Action'],
            ['title' => 'Parasite', 'year' => 2019, 'genre' => 'Thriller'],
            ['title' => 'Spirited Away', 'year' => 2001, 'genre' => 'Anime'],
        ];

        return view('movies', compact('movies'));
    }
}
