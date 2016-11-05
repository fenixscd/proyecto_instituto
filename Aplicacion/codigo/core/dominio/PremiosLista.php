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

        echo "Posicion repetida $posicionRepetida \n";

        if ($posicionRepetida === false){
            array_push($this->premios, $premio);
            echo "Dentro de falso\n";

        }else{


            $this->premios[$posicionRepetida]->addCantidad($cantidadAñadir);
            echo "Dentro de verdader \n";
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
            echo  "Pasada $i valor " .$this->premios[$i]->getCantidad()."\n";
            $totalPremios = $totalPremios + $this->premios[$i]->getCantidad();
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