<?php
function verCartelera(&$datos) {
    $filas = obtenerCartelera($datos);
    $columnas = [
        ['titulo' => 'ID',          'clave' => 'id',                  'ancho' => 4],
        ['titulo' => 'Sala',        'clave' => 'sala',                'ancho' => 8],
        ['titulo' => 'Horario',     'clave' => 'horario',             'ancho' => 7],
        ['titulo' => 'Pelicula',    'clave' => 'titulo',              'ancho' => 26],
        ['titulo' => 'Precio',      'clave' => 'precio',              'ancho' => 7],
        ['titulo' => 'Vendidos',    'clave' => 'boletos_vendidos',    'ancho' => 8],
        ['titulo' => 'Disponibles', 'clave' => 'boletos_disponibles', 'ancho' => 11],
    ];
    echo "\n";
    titulo('CARTELERA', 91);
    dibujarTabla($filas, $columnas);
}
