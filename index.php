<?php
/**
 * MOVIE CLASS
 */
/* Descrizione
Creazione di una classe ‘Movie’
Dichiarazione delle proprietà della classe
Dichiarazione del costruttore
Dichiarazione di almeno un metodo
Fare poi degli esempi di utilizzo della classe istanziando almeno due oggetti e stampando a schermo il valore delle proprietà */
class Movie {
    public $title;
    public $movieDirector;
    public $year;
    public $genre;
    //construct
    public function __construct($_title, $_movieDirector, $_year, $_genre) {
        $this->title = $_title;
        $this->movieDirector = $_movieDirector;
        $this->year = $_year;
        $this->genre = $_genre;
    }

    //OTTIENI IL TITOLO
    public function getTitle(){
        return $this->title;
    }

    //OTTIENI IL GENERE
    public function getGenre() {
        return $this->genre;
    }
}

$movie1 = new Movie('Batman: Il Cavaliere Oscuro', 'Christopher Nolan', 2008, 'Action');

$movie2 = new Movie('Il Cavaliere Oscuro - Il ritorno', 'Christopher Nolan', 2012, 'Action');

echo $movie1->title . '<br>';
echo $movie1->getGenre() . '<br>';
echo $movie2-> year . '<br>';
echo $movie2->getTitle();
?>