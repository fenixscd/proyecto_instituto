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

        if ($posicionRepetida === false){
            array_push($this->premios, $premio);

        }else{
            echo "Posicion repetida $posicionRepetida \n";
            $premioSeleccionado = $this->premios[$posicionRepetida];
            echo "Dentro de verdader sumo la cantidad especificada \n";
            echo "\n";
            echo "Valor sumar " . $cantidadAñadir;
            echo "\n";
            $premioSeleccionado->addCantidad($cantidadAñadir);
            echo "Valor valor almacenado " . $premioSeleccionado->getCantidad();
            echo "\n";

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