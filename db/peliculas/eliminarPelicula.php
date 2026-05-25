<?php
function eliminarPelicula(&$datos, $id) {
    for ($i = 0; $i < count($datos['peliculas']); $i++) {
        if ($datos['peliculas'][$i]['id'] === $id) {
            array_splice($datos['peliculas'], $i, 1);
            return true;
        }
    }
    return false;
}
