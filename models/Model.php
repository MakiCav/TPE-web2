<?php 
class Model {
    protected $db;

    public function __construct() {
        $this->db = $this->getConection();
    }

    private function getConection() {
        return new PDO('mysql:host=localhost;dbname=db_peliculas;charset=utf8', 'root', '');
    }
}