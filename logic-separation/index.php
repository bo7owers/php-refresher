<?php

$name = "The shadow of the wind";
$read = true;

if ($read) {
    $message = "You have read  $name";
} else {
    $message = "You haven't read $name";
}


$books = ["The Angel's Game", "The Prisoner of Heaven", "The Labirith of the Spirits"];


// Associative Arrays 

$movies = [
    [
        'title' => 'Birdman',
        'director' => 'Iñárritu',
        'year' => 2014
    ],
    [
        'title' => 'Glass Onion',
        'director' => 'Rian Johnson',
        'year' => 2022
    ],
    [
        'title' => 'The Revenant',
        'director' => 'Iñárritu',
        'year' => 2015
    ]
];

function filterByAuthor($movies, $director)
{
    $moviesArr = [];
    foreach ($movies as $movie) {
        if ($movie['director'] === 'Iñárritu') {
            $moviesArr[] = $movie;
        }
    }
    return $moviesArr;
}




function filter($items, $fn)
{
    $filteredItems = [];
    foreach ($items as $item) {
        if ($fn($item)) {
            $filteredItems[] = $item;

        }
    }
    return $filteredItems;
}
;

$filteredMovies = array_filter($movies, function ($movie) {
    return $movie['year'] >= 2015;
});



require "index.view.php";