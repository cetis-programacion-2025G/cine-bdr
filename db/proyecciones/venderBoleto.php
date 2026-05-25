<?php
// Retorna: 'ok' | 'insuficientes' | 'no_encontrado'
function venderBoleto(&$datos, $id_proyeccion, $cantidad) {
    for ($i = 0; $i < count($datos['proyecciones']); $i++) {
        if ($datos['proyecciones'][$i]['id'] === $id_proyeccion) {
            if ($datos['proyecciones'][$i]['boletos_disponibles'] < $cantidad) {
                return 'insuficientes';
            }
            $datos['proyecciones'][$i]['boletos_disponibles'] -= $cantidad;
            $datos['proyecciones'][$i]['boletos_vendidos']    += $cantidad;
            return 'ok';
        }
    }
    return 'no_encontrado';
}
