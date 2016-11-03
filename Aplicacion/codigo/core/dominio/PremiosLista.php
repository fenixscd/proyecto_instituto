<?php

namespace core\dominio;

use core\dominio\Premio;

class PremiosLista
{
    private $premios = array();

    /**
     *
     * @param Premio $premio
     */
    public function addPremio(Premio $premio)
    {
        array_push($this->premios, $premio);
    }

    /**
     * @return number
     */
    public function countPremios()
    {
        return count($this->premios);
    }

}