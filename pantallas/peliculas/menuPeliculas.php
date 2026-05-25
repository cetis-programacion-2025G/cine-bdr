<?php
function menuPeliculas(&$datos) {
    $salir = false;
    while (!$salir) {
        limpiarPantalla();
        echo "\n";
        titulo("PELICULAS", 65);
        echo str_repeat("─", 67) . "\n";
        echo " 1. Ver peliculas\n";
        echo " 2. Agregar pelicula\n";
        echo " 3. Editar pelicula\n";
        echo " 4. Eliminar pelicula\n";
        echo " 0. Regresar\n";
        echo str_repeat("─", 67) . "\n";

        $op = pedirEntero("Opcion", [0, 1, 2, 3, 4]);
        switch ($op) {
            case 1:
                limpiarPantalla();
                listarPeliculas($datos);
                esperarEnter();
                break;
            case 2:
                limpiarPantalla();
                agregarPelicula($datos);
                break;
            case 3:
                limpiarPantalla();
                editarPelicula($datos);
                break;
            case 4:
                limpiarPantalla();
                pantalla_eliminarPelicula($datos);
                break;
            case 0:
                $salir = true;
                break;
        }
    }
}
