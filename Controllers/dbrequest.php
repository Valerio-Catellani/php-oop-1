<?php
include __DIR__ . "/../Models/Movie.php";
include __DIR__ . "/../Models/Book.php";



function getAllMovies()
{
    $allMovies = json_decode(file_get_contents("resurces/movie_db.json"), true);
    $movies = [];
    foreach ($allMovies as $movie => $movieData) {
        array_push($movies, new Movie($movieData));
    }
    return $movies;
}


function getAllBooks()
{
    $allBooks = json_decode(file_get_contents("resurces/books_db.json"), true);
    $books = [];
    foreach ($allBooks as $book => $bookData) {
        array_push($books, new Book($bookData));
    }
    return $books;
}
