<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Movie;

class MovieController extends Controller {
    /*
    
        R - Read
    
    */ 

    public function index() {

        // Recuperare tutti gli elementi di questo tipo di dato
        // Movie::all() -> sulla tabella che si chiama Movies, esegui la query:
        // SELECT * FROM Movies

        $movies = Movie::all();

        return view("movies.index", compact("movies"));
    }

    public function show($id) {

        // Recupera il singolo elemento di questo tipo di dato
        // Movie::where('id', $id)->first() -> sulla tabella che si chiama movies, esegui la query:
        // SELECT * FROM movies WHERE id = $id

        $movie = Movie::where('id', $id)->first();

        return view('movies.show', compact('movie'));
    }
}