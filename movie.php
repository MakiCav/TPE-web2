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
    $sentence = $db->prepare("select * FROM estrenos WHERE ID = :id");
    $sentence->bindParam(':id', $movieID, PDO::PARAM_INT);
    $sentence->execute();
    $movie = $sentence->fetch(PDO::FETCH_OBJ);
    if ($movie) {
        echo "<img src='$movie->Imagen'/>";
        echo "<ul class='list-group list-group-flush'>";
        echo    "<li class='list-group-item'><h1>$movie->Titulo</h1></li>";
        echo    "<li class='list-group-item'>Género: $movie->Genero</li>";
        echo    "<li class='list-group-item'>Director: $movie->Director</li>";
        echo    "<li class='list-group-item'>Duración: $movie->Duracion</li>";
        echo    "<li class='list-group-item'>Fecha de Estreno: $movie->Estreno</li>";
        echo "</ul>";
    
    } else {
        echo "Movie not found.";
    }
} else {
    echo "Movie ID not provided.";
}
?>
    
</body>
</html>