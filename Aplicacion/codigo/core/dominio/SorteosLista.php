<?php

namespace core\dominio;

use core\dominio\Sorteo;
use Exception;

class SorteosLista
{
    private $sorteos = array();

    /**
     *
     * @param Sorteo $sorteo
     * @return \core\dominio\Sorteo
     */
    public function addSorteo(Sorteo $sorteo)
    {
        if ($this->isDuplicado($sorteo)){
            throw new Exception("Sorteo duplicado");
        }
        array_push($this->sorteos, $sorteo);
    }

    /**
     * @return number
     */
    public function countSorteos()
    {
        return count($this->sorteos);
    }

    /**
     * Se considera duplicado si contiene el mismo idSorteo
     * o el mismo nombreSorteo.
     */
    private function isDuplicado(Sorteo $sorteo)
    {
        $coinceId;
        $coincideNombreSorteo;

        foreach ($this->sorteos as $valor){
            $coinceId = $valor->getIdSorteo() === $sorteo->getIdSorteo();
            $coincideNombreSorteo = $valor->getNombreSorteo() === $sorteo->getNombreSorteo();

            if ($coinceId || $coincideNombreSorteo) return true;
        }
        return false;
    }
}




