<?php
function listarPeliculas(&$datos) {
    $filas = obtenerPeliculas($datos);
    $columnas = [
        ['titulo' => 'ID',       'clave' => 'id',       'ancho' => 4],
        ['titulo' => 'Titulo',   'clave' => 'titulo',   'ancho' => 30],
        ['titulo' => 'Genero',   'clave' => 'genero',   'ancho' => 12],
        ['titulo' => 'Dur(min)', 'clave' => 'duracion', 'ancho' => 8],
    ];
    echo "\n";
    titulo("LISTA DE PELICULAS", 65);
    dibujarTabla($filas, $columnas);
}
