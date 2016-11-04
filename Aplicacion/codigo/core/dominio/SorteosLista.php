<?php

namespace core\dominio;

use core\dominio\Sorteo;
use core\dominio\SorteosListaException;

class SorteosLista
{
    private $sorteos = array();

    /**
     *
     * @param Sorteo $sorteo
     * @return \core\dominio\Sorteo
     */
    public function addSorteo(SorteoInterface $sorteo)
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




