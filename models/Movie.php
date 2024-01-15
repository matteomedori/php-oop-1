<?php 

class Movie {

public $name;
public $author;
public $year;
public $genres;
public $img_url;

/**
 * __construct
 *
 * @param  string $_name
 * @param  string $_author
 * @param  int $_year
 * @param  array $_genres
 * @return void
 */
function __construct(string $_name, string $_author, int $_year, array $_genres, string $_img_url)
{
    $this->name = $_name;
    $this->author = $_author;
    $this->year = $_year;
    $this->genres = $_genres;
    $this->img_url = $_img_url;
}

/**
 * getAuthor
 *
 * @return string
 */
public function getAuthor(){
    return $this->author;
}

}
