<?php

namespace core\aplicacion\factorias;

use core\dominio\Participante;

class ParticipanteFactory
{
    public static function create(  int $idPremio,
                                    string $nombrePremio,
                                    string $descripcion,
                                    int $cantidad)
    {
        $participante = new Participante();

        $participante.setIdPremio($idPremio);
        $participante.setNombreSorteo($nombrePremio);
        $participante.setDescripcion($descripcion);
        $participante.setCantidad($cantidad);

        return $participante;
    }
}
