<?php

require_once __DIR__.'/../models/Movie.php';

$movie_db = [
    new Movie('Il padrino','F.F.Coppoola',1972, ['Gangster','Mafia', 'Drama'],'https://pad.mymovies.it/filmclub/2002/08/056/locandina.jpg'),
    new Movie('Il signore degli Anelli','Peter Jackson',2001, ['Fantasy','Adventure'],'https://cdn.europosters.eu/image/750/posters/lord-of-the-rings-fellowship-i11723.jpg'),
    new Movie('Taxi driver','Martin Scorsese',1976, ['Drama','Action'],'https://images.photowall.com/products/71137/taxi-driver-2.jpg?h=699&q=85'),
    new Movie('A clockwork orange','Stanley Kubrick',1971, ['Drama','Action'],'https://m.media-amazon.com/images/I/71TUj3olRXL.jpg'),
    new Movie('The shining','Stanley Kubrick',1980, ['Horror','Suspence'],'https://media.posterlounge.com/img/products/710000/705435/705435_poster.jpg'),
    new Movie('Parasite','Bong Joon-ho',2019, ['Thriller','Drama'],'https://m.media-amazon.com/images/I/71960VfyitL._AC_UF1000,1000_QL80_.jpg')
];

