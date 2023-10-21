<?php
require_once 'models/MovieModel.php';
class ActorModel extends Model {
    public function getActorById($id) {
        $query = $this->db->prepare("SELECT * FROM actores WHERE ID = :id");
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_OBJ);
    }
    public function getAllActors() {
        $query = $this->db->prepare("SELECT * FROM actores");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ); // Use fetchAll to retrieve multiple rows
    }
    
}
