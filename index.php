<?php

// Definizione della classe Movie
class Movie {
    // Dichiarazione delle variabili d'istanza
    public $title;
    public $genre;
    public $cast;
    public $releaseDate;

    // Costruttore della classe Movie
    function __construct($_title, $_genre, $_cast, $_releaseDate) {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->cast = $_cast;
        $this->releaseDate = $_releaseDate;
    }
}

// Istanziazione degli oggetti
$movie1 = new Movie("Tenacious D - The Pick Of Destiny", "Comedy", "Jack Black, Kyle Gass, Ronnie James Dio, Dave Grohl", "2006");
$movie2 = new Movie("The Godfather", "Gangster/drammatico/noir", "Marlon Brando, Al Pacino, James Caan", "1972");

// Stampa provvisoria

echo "Title: " . $movie1->title . "<br>";
echo "Genre: " . $movie1->genre . "<br>";
echo "Cast: " . $movie1->cast . "<br>";
echo "Released: " . $movie1->releaseDate . "<br>";

echo "<br>";


echo "Title: " . $movie2->title . "<br>";
echo "Genre: " . $movie2->genre . "<br>";
echo "Cast: " . $movie2->cast . "<br>";
echo "Released: " . $movie2->releaseDate . "<br>";
?>
