<?php

use App\Models\Game;
use App\Models\Movie;
use Illuminate\Support\Facades\Route;
use App\Models\Student;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/games', function () {
    $games = Game::all();
    return view('games.index', compact('games'));
});

Route::get('/games/{game}', function (Game $game) {
    return view('games.show', compact('game'));

});

Route::get('/students', function () {
    $students = Student::all();
    return view('students', ['students' => $students]);
});


Route::get('/movies', function () {
    $movies = Movie::all();
    return view('movies.index', compact('movies'));
});
