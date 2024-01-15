<?php

// classe movie
class Movie {

    public $name;
    public $author;
    public $year;
    public $vote;
    public $genre;
    
    /**
     * __construct
     *
     * @param  string $_name
     * @param  string $_author
     * @param  int $_year
     * @param  float $_vote
     * @param  string $_genre
     * @return void
     */
    function __construct(string $_name, string $_author, int $_year, float $_vote, string $_genre)
    {
        $this->name = $_name;
        $this->author = $_author;
        $this->year = $_year;
        $this->vote = $_vote;
        $this->genre = $_genre;
    }
}

// vengono creati 2 oggetti movie
$movie1 = new Movie('Il padrino','F.F.Coppoola',1972, 9.6, 'Gangster');
$movie2 = new Movie('Il signore degli Anelli','Peter Jackson',2001, 9.2, 'Fantasy');

// var_dump($movie1);
// var_dump($movie2);

// stampo i movie
echo "Nome film: $movie1->name <br>
Regista: $movie1->author <br>
Anno: $movie1->year <br>
Votazione: $movie1->vote <br>
Genere: $movie1->genre <br> <br>";

echo "Nome film: $movie2->name <br>
Regista: $movie2->author <br>
Anno: $movie2->year <br>
Votazione: $movie2->vote <br>
Genere: $movie2->genre ";