<?php

namespace core\aplicacion\factorias;

use core\dominio\Premio;

class PremioFactory
{
    public static function create(  int     $idPremio,
                                    string  $nombrePremio,
                                    string  $descripcion,
                                    int     $cantidad)
    {
        $premio = new Premio();

        $premio.setIdPremio($idPremio);
        $premio.setNombreSorteo($nombrePremio);
        $premio.setDescripcion($descripcion);
        $premio.setCantidad($cantidad);

        return $premio;
    }
}
