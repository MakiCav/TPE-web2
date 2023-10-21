<?php
    echo "<img src='$movie->Imagen'/>";
    echo "<ul class='list-group list-group-flush'>";
    echo "<li class='list-group-item'><h1>$movie->Titulo</h1></li>";
    echo "<li class='list-group-item'>Género: $movie->Genero</li>";
    echo "<li class='list-group-item'>Director: $movie->Director</li>";
    echo "<li class='list-group-item'>Duración: $movie->Duracion</li>";
    echo "<li class='list-group-item'>Fecha de Estreno: $movie->Estreno</li>";
    echo "<a href='index.php?action=actor&id={$actor1->ID}' class='list-group-item'>Actor 1: {$actor1->Nombre} {$actor1->Apellido}</a>";
echo "<a href='index.php?action=actor&id={$actor2->ID}' class='list-group-item'>Actor 2: {$actor2->Nombre} {$actor2->Apellido}</a>"; 
    echo "</ul>";

 