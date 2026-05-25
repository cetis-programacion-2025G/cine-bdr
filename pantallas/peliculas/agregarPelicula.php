<?php
function agregarPelicula(&$datos) {
    limpiarPantalla();
    echo "\n";
    titulo("AGREGAR PELICULA");
    $titulo   = readline("Titulo           : ");
    $genero   = readline("Genero           : ");
    $duracion = (int)readline("Duracion (min)   : ");
    $id = insertarPelicula($datos, $titulo, $genero, $duracion);
    echo "\n  Pelicula agregada con ID $id.\n";
    esperarEnter();
}
