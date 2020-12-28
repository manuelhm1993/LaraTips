<?php
/**
 * Función: comprobar si la ruta actual coincide con el item del menú
 * Retorno: la cadena 'active' en caso de coincidir o '' en caso contrario
 * Autor: Ing. Manuel Henriquez
 */
function active($path)
{
    return request()->is($path) ? 'active' : '';
}