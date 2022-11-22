<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
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
});
