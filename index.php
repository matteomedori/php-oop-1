<?php

// classe movie
class Movie {

    public $name;
    public $author;
    public $year;
    public $vote;
    public $genres;
    
    /**
     * __construct
     *
     * @param  string $_name
     * @param  string $_author
     * @param  int $_year
     * @param  float $_vote
     * @param  array $_genres
     * @return void
     */
    function __construct(string $_name, string $_author, int $_year, float $_vote, array $_genres)
    {
        $this->name = $_name;
        $this->author = $_author;
        $this->year = $_year;
        $this->vote = $_vote;
        $this->genres = $_genres;
    }
}

// vengono creati 2 oggetti movie
$movie1 = new Movie('Il padrino','F.F.Coppoola',1972, 9.6, ['Gangster','Mafia', 'Drama']);
$movie2 = new Movie('Il signore degli Anelli','Peter Jackson',2001, 9.2, ['Fantasy','Adventure']);

// var_dump($movie1);
// var_dump($movie2);

// stampo i movie
echo "Nome film: $movie1->name <br>
Regista: $movie1->author <br>
Anno: $movie1->year <br>
Votazione: $movie1->vote <br> 
Generi: ";

$counter = 0;
foreach($movie1->genres as $genre){
    // se è l'ultimo elemento NON stampo la virgola
    if( $counter === count( $movie1->genres ) - 1) echo $genre;
    else echo $genre.', ';
    $counter++;
}


echo "<br> <br>Nome film: $movie2->name <br>
Regista: $movie2->author <br>
Anno: $movie2->year <br>
Votazione: $movie2->vote <br>
Generi: ";

$counter = 0;
foreach($movie2->genres as $genre){
    if( $counter === count( $movie2->genres ) - 1) echo $genre;
    else echo $genre.', ';
    $counter++;
}