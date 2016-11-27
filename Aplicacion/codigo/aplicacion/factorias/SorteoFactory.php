<?php

namespace core\aplicacion\factorias;

use core\dominio\Sorteo;

class SorteoFactory
{
    public static function create(  int     $idSorteo,
                                    string  $nombreSorteo,
                                    string  $descripcion,
                                    string  $fechaInicio,
                                    string  $fechaFin,
                                    UsuarioInterfaz $usuario)
    {
        $sorteo = new Sorteo();

        $sorteo.setIdSorteo ($idSorteo);
        $sorteo.setNombreSorteo($nombreSorteo);
        $sorteo.setDescripcion($descripcion);
        $sorteo.setFechaInicio($fechaInicio);
        $sorteo.setFechaFin($fechaFin);
        $sorteo.setUsuario($usuario);

        return $sorteo;
    }
}
