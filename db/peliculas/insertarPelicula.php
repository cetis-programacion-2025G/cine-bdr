<?php
function insertarPelicula(&$datos, $titulo, $genero, $duracion) {
    $nuevo = [
        'id'       => count($datos['peliculas']) + 1,
        'titulo'   => $titulo,
        'genero'   => $genero,
        'duracion' => $duracion,
    ];
    $datos['peliculas'][] = $nuevo;
    return $nuevo['id'];
}
