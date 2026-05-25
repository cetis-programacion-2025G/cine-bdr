<?php
function insertarProyeccion(&$datos, $id_pelicula, $sala, $horario, $precio, $boletos_disponibles) {
    $nuevo = [
        'id'                  => count($datos['proyecciones']) + 1,
        'id_pelicula'         => $id_pelicula,
        'sala'                => $sala,
        'horario'             => $horario,
        'precio'              => $precio,
        'boletos_disponibles' => $boletos_disponibles,
        'boletos_vendidos'    => 0,
    ];
    $datos['proyecciones'][] = $nuevo;
    return $nuevo['id'];
}
