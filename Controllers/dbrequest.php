<?php
include __DIR__ . "/../Models/Movie.php";


$allMovies = json_decode(file_get_contents("../resurces/movie_db.json"), true);

$movies = [];

foreach ($allMovies as $movie => $movieData) {
    array_push($movies, new Movie($movieData));
}

var_dump($movies);