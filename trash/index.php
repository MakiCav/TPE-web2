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
        echo "<a href='movie.php?id=$movie->ID' class='btn btn-primary'>Ir a película</a>";
        echo "</div>";
        echo "</div>";
    }
    echo "</div>";
}

showMovieCards();
?>  
    
</body>
</html>