<?php

require_once __DIR__.'/../database/db.php';
$counter = 0;

echo "
    <main>
        <div class=\"container\">
            <ul class=\"movie-container\">";

foreach($movie_db as $movie){
    echo "
        <li>
            <img src=\"$movie->img_url\" alt=\"\">
            <h2> $movie->name </h2>
            <h3> $movie->author </h3>
            <h3> $movie->year </h3>
            <h3>";

    foreach($movie->genres as $genre){
        if( $counter === count( $movie->genres ) - 1){
            echo $genre; 
            $counter=0;
        }else{
            echo $genre.', ';
            $counter++; 
        }
    }
            
    echo "
        </h3>
            </li>";
}

echo "
    </ul>
        </div>
            </main>";

?>