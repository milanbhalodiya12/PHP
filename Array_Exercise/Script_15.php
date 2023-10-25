<!-- Create a multidimensional array to store information about movies, including title, director, and
release year for at least two movies. Display the information for one of the movies. -->

<?php

    $movies = array(
        array(
            'title' => 'Leo',
            'director' => 'Lokesh Kanagaraj',
            'releaseYear' => 2023
        ),
        array(
            'title' => 'Transformer-5',
            'director' => 'Steven Caple Jr.',
            'releaseYear' => 2023
        )
    );
    
    echo "Movie Title: " . $movies[0]["title"] . "<br>";
    echo "Director: " . $movies[0]["director"] . "<br>";
    echo "Release Year: " . $movies[0]["releaseYear"] . "<br>";
    echo "<br> <br>";
    echo "For Array Having Index 1: <br>";
    print_r($movies[1]);

?>