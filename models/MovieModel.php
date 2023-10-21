<?php 
require_once 'Model.php';
class MovieModel extends Model {
    public function getMovies() {
        $query = $this->db->prepare("SELECT * FROM estrenos");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function insertMovie($titulo, $genero, $director, $estreno, $duracion, $actorId, $actorId2, $imagen) {
        $query = $this->db->prepare('INSERT INTO estrenos (Titulo, Genero, Director, Estreno, Duracion, ActorID, ActorID2, Imagen) VALUES(?,?,?,?,?,?,?,?)');
        $query->execute([$titulo, $genero, $director, $estreno, $duracion, $actorId, $actorId2, $imagen]);
        return $this->db->lastInsertId();
    }

    public function deleteMovie($id) {
        $query = $this->db->prepare('DELETE FROM estrenos WHERE id = ?');
        $query->execute([$id]);
        return $query->rowCount();
    }
    public function getMovieById($id) {
        $query = $this->db->prepare("SELECT * FROM estrenos WHERE ID = :id");
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_OBJ);
    }
}