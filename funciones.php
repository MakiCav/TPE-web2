<?php
require_once './db.php';
require('header.php');
function showMovieCards()
{   
    $db = new PDO('mysql:host=localhost;dbname=db_peliculas;charset=utf8', 'root', '');
    $sentence = $db->prepare("select * FROM estrenos");
    $sentence->execute();
    $movies = $sentence->fetchAll(PDO::FETCH_OBJ);

    echo "<div class='container-main'>";
    foreach ($movies as $movie) {
        echo "<div class='card' style='width: 18rem;'>";
        echo "<img class='card-img-top' src='$movie->Imagen' alt='Card image cap'>";
        echo "<div class='card-body'>";
        echo "<h5 class='card-title'>$movie->Titulo</h5>";
        echo "<p class='card-text'>$movie->Genero</p>";
        echo "<a href='router.php?action=movie&id=$movie->ID' class='btn btn-primary'>Ir a película</a>";
        echo "</div>";
        echo "</div>";
    }
    echo "</div>";
}
function showMovieDetail() {
    if (isset($_GET['id'])) {
        $movieID = $_GET['id'];
        $db = new PDO('mysql:host=localhost;dbname=db_peliculas;charset=utf8', 'root', '');
        $sentence = $db->prepare("SELECT * FROM estrenos WHERE ID = :id");
        $sentence->bindParam(':id', $movieID, PDO::PARAM_INT);
        $sentence->execute();
        $movie = $sentence->fetch(PDO::FETCH_OBJ);
        
        if ($movie) {
            $sentenceActor1 = $db->prepare("SELECT * FROM actores WHERE ID = :actorID");
            $sentenceActor2 = $db->prepare("SELECT * FROM actores WHERE ID = :actorID2");
            $sentenceActor1->bindParam(':actorID', $movie->ActorID, PDO::PARAM_INT);
            $sentenceActor2->bindParam(':actorID2', $movie->ActorID2, PDO::PARAM_INT);
            $sentenceActor1->execute();
            $sentenceActor2->execute();
            $actor1 = $sentenceActor1->fetch(PDO::FETCH_OBJ);
            $actor2 = $sentenceActor2->fetch(PDO::FETCH_OBJ);
            
            echo "<img src='$movie->Imagen'/>";
            echo "<ul class='list-group list-group-flush'>";
            echo "<li class='list-group-item'><h1>$movie->Titulo</h1></li>";
            echo "<li class='list-group-item'>Género: $movie->Genero</li>";
            echo "<li class='list-group-item'>Director: $movie->Director</li>";
            echo "<li class='list-group-item'>Duración: $movie->Duracion</li>";
            echo "<li class='list-group-item'>Fecha de Estreno: $movie->Estreno</li>";
            echo "<a href='router.php?action=actor&id=$actor1->ID' class='list-group-item'>Actor 1: $actor1->Nombre $actor1->Apellido</a> ";
            echo "<a href='router.php?action=actor&id=$actor2->ID class='list-group-item'>Actor 2: $actor2->Nombre $actor2->Apellido</a>";
            echo "</ul>";
        } else {
            echo "Movie not found.";
        }
    } 
}
function showActor () {
    if (isset($_GET['id'])) {
        $movieID = $_GET['id'];
        $db = new PDO('mysql:host=localhost;dbname=db_peliculas;charset=utf8', 'root', '');
        $sentence = $db->prepare("select * FROM actores WHERE ID = :id");
        $sentence->bindParam(':id', $movieID, PDO::PARAM_INT);
        $sentence->execute();
        $actor = $sentence->fetch(PDO::FETCH_OBJ);
        if ($actor) {
            echo "<img src='$actor->Foto'/>";
            echo "<ul class='list-group list-group-flush'>";
            echo    "<li class='list-group-item'><h1>$actor->Nombre $actor->Apellido</h1></li>";
            echo    "<li class='list-group-item'>Género: $actor->Nacimiento</li>";
            echo    "<li class='list-group-item'>Director: $actor->Nacionalidad</li>";
            echo "</ul>";
        } else {
            echo "Actor not found.";
        }
    } 
}
function addTask() {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $priority = $_POST['priority'];
    $id = insertTask($title, $description, $priority);

    if ($id) {
        header('Location: ' . BASE_URL);
    } else {
        echo "Error al insertar la tarea";
    }
}

function removeMovie($id) {
    deleteMovie($id);
    header('Location: ' . BASE_URL);
}

function finishTask($id) {
    updateTask($id);
    header('Location: ' . BASE_URL);
}

function addMovie1() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $titulo = $_POST['titulo'];
        $genero = $_POST['genero'];
        $director = $_POST['director'];
        $estreno = $_POST['estreno'];
        $duracion = $_POST['duracion'];
        $actor1 = $_POST['actor1'];
        $actor2 = $_POST['actor2'];
        $actor1ID = getActorIDByName($actor1);
        $actor2ID = getActorIDByName($actor2);
        $imagen= $_POST['imagen'];
        if ($actor1ID !== false && $actor2ID !== false) {
            insertMovie($titulo, $genero, $director, $estreno, $duracion, $actor1ID, $actor2ID, $imagen);
        }
    }
}
function getActorIDByName($actorName) {
    $db = new PDO('mysql:host=localhost;dbname=db_peliculas;charset=utf8', 'root', '');
    $sentence = $db->prepare("SELECT ID FROM actores WHERE CONCAT(Nombre, ' ', Apellido) = :actorName");
    $sentence->bindParam(':actorName', $actorName, PDO::PARAM_STR);
    $sentence->execute();
    $result = $sentence->fetch(PDO::FETCH_ASSOC);    
    if ($result) {
        return $result['ID'];
    } else {
        return false;
    }
}

function addActor() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $nacionalidad = $_POST['nacionalidad'];
        $nacimiento = $_POST['nacimiento'];
        $imagen= $_POST['imagen'];
        insertActor($nombre, $apellido, $nacionalidad, $nacimiento, $imagen);
    }
}

function showMoviesAdmin()
{   
    $db = new PDO('mysql:host=localhost;dbname=db_peliculas;charset=utf8', 'root', '');
    $sentence = $db->prepare("select * FROM estrenos");
    $sentence->execute();
    $movies = $sentence->fetchAll(PDO::FETCH_OBJ);
    echo "<div class='container-main'>";
    foreach ($movies as $movie) {
        echo "<div class='card' style='width: 18rem;'>";
        echo "<img class='card-img-top' src='$movie->Imagen' alt='Card image cap'>";
        echo "<div class='card-body'>";
        echo "<h5 class='card-title'>$movie->Titulo</h5>";
        echo "<p class='card-text'>$movie->Genero</p>";
        echo "<a href='router.php?action=eliminarMovie&id=$movie->ID' class='btn btn-primary'>BORRAR</a>";
        echo "</div>";
        echo "</div>";
    }
    echo "</div>";
}