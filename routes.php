<?php 
$routes = array(
    'listar' => 'MovieController@showMovieCards',
    'agregarMovie' => 'MovieController@addMovie1',
    'agregarActor' => 'ActorController@addActor',
    'eliminarMovie' => 'MovieController@removeMovie',
    'eliminarActor' => 'ActorController@removeActor',
    'finalizar' => 'TaskController@finish',
    'movie' => 'MovieController@showMovieDetail',
    'actor' => 'ActorController@showActor',
);