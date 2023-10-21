<?php
require_once './models/MovieModel.php';
require_once './models/Model.php';
require_once './models/ActorModel.php';
class MovieController {

    
    public function showMovieCards() {
        // Load the model
        $movieModel = new MovieModel(); // Assuming you have a MovieModel class.
       
        // Retrieve a list of movies
        $movies = $movieModel->getMovies();
        
        foreach($movies as $movie){
           
            require('views/movies.php');
        }
        
    }

    public function showMovieDetail() {
        if (isset($_GET['id'])) {
            $movieID = $_GET['id'];

            // Load the model
            $movieModel = new MovieModel(); // Assuming you have a MovieModel class.

            // Retrieve movie details by ID
            $movie = $movieModel->getMovieById($movieID);
            $actorModel = new ActorModel();
            if ($movie) {
                $actor1 = $actorModel->getActorById($movie->ActorID);
                $actor2 = $actorModel->getActorById($movie->ActorID2);
                require('views/movie-details.php');
            } else {
                echo "Movie not found.";
            }
        }
    }

    public function addMovie1() {
        // Handle the logic for adding a movie
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $titulo = $_POST['titulo'];
            $genero = $_POST['genero'];
            $director = $_POST['director'];
            $estreno = $_POST['estreno'];
            $duracion = $_POST['duracion'];
            $actor1 = $_POST['actor1'];
            $actor2 = $_POST['actor2'];
            $actor1ID = $movieModel->getActorIDByName($actor1);
            $actor2ID = $movieModel->getActorIDByName($actor2);
            $imagen = $_POST['imagen'];

            // Validate and insert the movie into the database
            if ($actor1ID !== false && $actor2ID !== false) {
                $movieModel->insertMovie($titulo, $genero, $director, $estreno, $duracion, $actor1ID, $actor2ID, $imagen);
            }
        }

        // Redirect to the appropriate page or display a message
        header('Location: ' . BASE_URL);
    }

    public function removeMovie($id) {
        // Load the model
        $movieModel = new MovieModel(); // Assuming you have a MovieModel class.

        // Delete the movie by ID
        $result = $movieModel->deleteMovie($id);

        // Redirect to the appropriate page or display a message
        if ($result) {
            header('Location: ' . BASE_URL);
        } else {
            echo "Error deleting the movie.";
        }
    }
}