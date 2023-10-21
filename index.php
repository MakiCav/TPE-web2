<?php

require_once './funciones.php';
require_once 'routes.php'; // Include the route definitions.
define('BASE_URL', 'http://localhost/proyectos/TPE-web2/');



// Extract the action and ID from the URL if they exist
$action = 'listar'; // Default action
$id = null;

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
}

$params = explode('/', $action);

// Check if the defined route exists, and if so, route to the appropriate controller action.
if (array_key_exists($params[0], $routes)) {
    list($controllerName, $actionName) = explode('@', $routes[$params[0]]);
    require_once 'controllers/' . $controllerName . '.php'; // Include the controller file.
    $controller = new $controllerName();
    $controller->$actionName();
} else {
    echo "404 Page Not Found";  
}