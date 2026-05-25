<?php
function actualizarPelicula(&$datos, $id, $titulo, $genero, $duracion) {
    for ($i = 0; $i < count($datos['peliculas']); $i++) {
        if ($datos['peliculas'][$i]['id'] === $id) {
            $datos['peliculas'][$i]['titulo']   = $titulo;
            $datos['peliculas'][$i]['genero']   = $genero;
            $datos['peliculas'][$i]['duracion'] = $duracion;
            return true;
        }
    }
    return false;
}
