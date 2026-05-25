<?php
function menuProyecciones(&$datos) {
    $salir = false;
    while (!$salir) {
        limpiarPantalla();
        echo "\n";
        titulo("PROYECCIONES", 91);
        echo str_repeat("─", 93) . "\n";
        echo " 1. Ver cartelera\n";
        echo " 2. Agregar proyeccion\n";
        echo " 3. Vender boleto\n";
        echo " 0. Regresar\n";
        echo str_repeat("─", 93) . "\n";

        $op = pedirEntero("Opcion", [0, 1, 2, 3]);
        switch ($op) {
            case 1:
                limpiarPantalla();
                verCartelera($datos);
                esperarEnter();
                break;
            case 2:
                limpiarPantalla();
                agregarProyeccion($datos);
                break;
            case 3:
                pantalla_venderBoleto($datos);
                break;
            case 0:
                $salir = true;
                break;
        }
    }
}
