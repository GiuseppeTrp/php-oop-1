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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Movies</title>
    <style>
        body {
            background-color: #1db954;
        }
        .movie-card {
            background-color: #535353;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease-in-out;
        }
        .movie-card:hover {
            transform: scale(1.05);
        }
        .movie-card .card-header {
            background-color: #121212;
        }
        .movie-card .card-header h3 {
            color: whitesmoke;
        }
        .movie-card .card-text {
            color: whitesmoke;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Movies</h1>
        <!-- Movie Cards -->
        <div class="row">
            <!-- Card per il primo film -->
            <div class="col-md-6">
                <div class="card movie-card mb-3">
                    <div class="card-header border-0 bg-dark"><h3 class="card-title mb-0"><?php echo $movie1->title; ?></h3></div>
                    <div class="card-body p-3">
                        <p class="card-text mb-3"><strong class="text-warning">Genre:</strong> <?php echo $movie1->genre; ?></p>
                        <p class="card-text mb-3"><strong class="text-warning">Cast:</strong> <?php echo $movie1->cast; ?></p>
                        <p class="card-text mb-0"><strong class="text-warning">Release Date:</strong> <?php echo $movie1->releaseDate; ?></p>
                    </div>
                </div>
            </div>
            <!-- Card per il secondo film -->
            <div class="col-md-6">
                <div class="card movie-card mb-3">
                    <div class="card-header border-0 bg-dark"><h3 class="card-title mb-0"><?php echo $movie2->title; ?></h3></div>
                    <div class="card-body p-3">
                        <p class="card-text mb-3"><strong class="text-warning">Genre:</strong> <?php echo $movie2->genre; ?></p>
                        <p class="card-text mb-3"><strong class="text-warning">Cast:</strong> <?php echo $movie2->cast; ?></p>
                        <p class="card-text mb-0"><strong class="text-warning">Release Date:</strong> <?php echo $movie2->releaseDate; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

