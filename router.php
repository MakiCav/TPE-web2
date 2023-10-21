<?php
require_once './funciones.php';
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'listar'; // accion por defecto
if (!empty( $_GET['action'])) {
    $action = $_GET['action'];
}
if (!empty( $_GET['id'])) {
    $id = $_GET['id'];
}
$params = explode('/', $action);

switch ($params[0]) {
    case 'listar':
        showMovieCards();
        break;
    case 'agregarMovie':
        addMovie1();
        break;
    case 'agregarActor':
        addActor();
        break;
    case 'eliminarMovie':
        removeMovie($params[1]);
        break;
    case 'eliminarActor':
        removeActor($params[1]);
        break;
    case 'finalizar':
        finish($params[1]);
        break;
    case 'movie': 
        showMovieDetail();
        break;
    case 'actor': 
        showActor();
        break;
    default: 
        echo "404 Page Not Found";
        break;
}
