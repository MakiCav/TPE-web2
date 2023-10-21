<?php

function getConection() {
    return new PDO('mysql:host=localhost;dbname=db_peliculas;charset=utf8', 'root', '');
}


function getMovies() {
    $db = getConection();
    $sentence = $db->prepare("select * FROM estrenos");
    $sentence->execute();
    $movies = $sentence->fetchAll(PDO::FETCH_OBJ);
    return $movies;
}
function getActores() {
    $db = getConection();
    $sentence = $db->prepare("select * FROM actores");
    $sentence->execute();
    $actores = $sentence->fetchAll(PDO::FETCH_OBJ);
    return $actores;
}

function insertMovie($titulo, $genero, $director, $estreno, $duracion, $actorId, $actorId2, $imagen) {
    $db = getConection();
    $query = $db->prepare('INSERT INTO estrenos (Titulo, Genero, Director, Estreno, Duracion, ActorID, ActorID2, Imagen) VALUES(?,?,?,?,?,?,?,?)');
    $query->execute([$titulo, $genero, $director, $estreno, $duracion, $actorId, $actorId2, $imagen]);
    return $db->lastInsertId();
}

function deleteMovie($id) {
    try {
        $db = getConection();
        $query = $db->prepare('DELETE FROM estrenos WHERE id = ?');
        $query->execute([$id]);
        // Check if the delete operation was successful
        if ($query->rowCount() > 0) {
            echo "Movie with ID $id has been successfully deleted.";
        } else {
            echo "No records were deleted.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

function insertActor($nombre, $apellido, $nacionalidad, $nacimiento, $imagen) {
    $db = getConection();
    $query = $db->prepare('INSERT INTO actores (Nombre, Apellido, Nacionalidad, Nacimiento, Foto) VALUES(?,?,?,?,?)');
    $query->execute([$nombre, $apellido, $nacionalidad, $nacimiento, $imagen]);
    return $db->lastInsertId();
}
