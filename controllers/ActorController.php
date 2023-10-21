<?php 
require_once "./models/ActorModel.php";
class ActorController {
    public function showActor() {
        if (isset($_GET['id'])) {
            $actorID = $_GET['id'];
            $actorModel = new ActorModel(); 
            $actor = $actorModel->getActorById($actorID);

            require('views/actor-detail.php'); 
    }
}}