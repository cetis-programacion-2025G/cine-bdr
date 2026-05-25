<?php
// Ejecutar: php index.php

require_once 'datos.php';
require_once 'funciones.php';

$datos     = datosCine();
$peliculas = &$datos['peliculas'];
$funciones = &$datos['funciones'];
$salir     = false;

while (!$salir) {
    system('clear');
    echo "\n";
    echo "╔════════════════════════════════════════╗\n";
    echo "║        SISTEMA DE CINE                ║\n";
    echo "╠════════════════════════════════════════╣\n";
    echo "║ 1. Ver cartelera                      ║\n";
    echo "║ 2. Agregar película                   ║\n";
    echo "║ 3. Agregar función                    ║\n";
    echo "║ 4. Vender boleto                      ║\n";
    echo "║ 0. Salir                              ║\n";
    echo "╚════════════════════════════════════════╝\n";

    $opcion = readline("\nOpcion: ");

    switch ($opcion) {
        case '1': verCartelera($peliculas, $funciones);      break;
        case '2': agregarPelicula($peliculas);               break;
        case '3': agregarFuncion($peliculas, $funciones);    break;
        case '4': venderBoleto($peliculas, $funciones);      break;
        case '0': $salir = true;                             break;
        default:
            echo "Opcion no valida.\n";
            readline("Enter para continuar...");
    }
}

echo "\nHasta luego.\n";
