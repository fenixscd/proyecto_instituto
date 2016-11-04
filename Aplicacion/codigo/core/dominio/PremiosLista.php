<?php

namespace core\dominio;

use core\dominio\Premio;

class PremiosLista
{
    private $premios = array();

    /**
     * @param Premio $premio
     */
    public function addPremio(Premio $premio)
    {
        $posicionRepetida = $this->getPremioRepetido($premio);
        $cantidadAñadir = $premio->getCantidad();

        if ($posicionRepetida){
           $this->premios[$posicionRepetida]->addCantidad($cantidadAñadir);

        }else{
            array_push($this->premios, $premio);
        }

    }

    /**
     * @return number
     */
    public function getNumeroDeLineasDePremio()
    {
        return count($this->premios);
    }

    public function getNumeroTotalDePremios()
    {
        $totalPremios = 0;
        foreach ($this->premios as $i => $valor){
            $totalPremios = $totalPremios + $this->premios[$i];
        }
        return $totalPremios;
    }

    private function getPremioRepetido(PremioInterface $premio)
    {
        foreach ($this->premios as $i => $valor){
            $coinceNombre = $valor->getNombrePremio() === $premio->getNombrePremio();
            if ($coinceNombre) return $i;
        }
        return false;


    }

}