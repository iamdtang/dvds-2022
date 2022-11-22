<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DvdController extends Controller
{
    public function index()
    {
        // SELECT *
        // FROM dvd_titles, ratings, genres
        // WHERE dvd_titles.rating_id = ratings.rating_id
        // AND dvd_titles.genre_id = genres.genre_id

        $dvds = DB::table('dvd_titles')
            ->join('ratings', 'dvd_titles.rating_id', '=', 'ratings.rating_id')
            ->join('genres', 'dvd_titles.genre_id', '=', 'genres.genre_id')
            ->get();

        return view('index', [
            'dvds' => $dvds,
        ]);
    }
}
