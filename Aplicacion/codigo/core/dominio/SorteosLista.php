<?php

namespace core\dominio;

use core\dominio\Sorteo;

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
        array_push($this->sorteos, $sorteo);
    }

    /**
     * @return number
     */
    public function countSorteos()
    {
        return count($this->sorteos);
    }
}