<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css"/>
</head>
<body>
<?php
include_once('header.php');
if (function_exists('customPageHeader'))
    customPageHeader();

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
?>
    
</body>
</html>