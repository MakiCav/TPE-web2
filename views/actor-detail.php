<?php 

if ($actor) {
    echo "<img src='{$actor->Foto}'/>";
    echo "<ul class='list-group list-group-flush'>";
    echo "<li class='list-group-item'><h1>{$actor->Nombre} {$actor->Apellido}</h1></li>";
    echo "<li class='list-group-item'>Género: {$actor->Nacimiento}</li>";
    echo "<li class='list-group-item'>Director: {$actor->Nacionalidad}</li>";
    echo "</ul>";
} else {
    echo "Actor not found.";
}