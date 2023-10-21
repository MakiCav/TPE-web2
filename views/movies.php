<?php
echo "<div class='container-main'>";
echo "<div class='card' style='width: 18rem;'>";
echo "<img class='card-img-top' src='$movie->Imagen' alt='Card image cap'>";
echo "<div class='card-body'>";
echo "<h5 class='card-title'>$movie->Titulo</h5>";
echo "<p class='card-text'>$movie->Genero</p>";

echo "<a href='" . BASE_URL . "movies/" . $movie->ID . "' class='btn btn-primary'>Ir a película</a>";
echo "</div>";

echo "</div>";
echo "</div>";

   //'index.php?action=movie&id={$movie->ID}'