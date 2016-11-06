<?php

namespace core\dominio;

use core\dominio\Premio;

class PremiosLista
{
    private $premios = array();

    /**
     * @param Premio $premio
     */
    public function addPremio(PremioInterface $premio)
    {
        $posicionRepetida = $this->getPremioRepetido($premio);

        if ($posicionRepetida === false){
            array_push($this->premios, $premio);

        }else{
            $cantidadAñadir = $premio->getCantidad();
            $premioSeleccionado = $this->premios[$posicionRepetida];
            $premioSeleccionado->addCantidad($cantidadAñadir);
        }
    }

    /**
     * @return number
     */
    public function getNumeroDeLineasDePremio()
    {
        return count($this->premios);
    }

    /**
     *
     * @return int
     */
    public function getNumeroTotalDePremios()
    {
        $totalPremios = 0;
        foreach ($this->premios as $i => $valor){
            $totalPremios = $totalPremios + $this->premios[$i]->getCantidad();
        }
        return $totalPremios;
    }

    /**
     *
     * @param PremioInterface $premio
     * @return int|boolean
     */
    private function getPremioRepetido(PremioInterface $premio)
    {
        foreach ($this->premios as $i => $valor){
            $coinceNombre = $valor->getNombrePremio() === $premio->getNombrePremio();
            if ($coinceNombre) return $i;
        }
        return false;
    }
    /**
     * @param PremioInterface $premio
     * @param int $cantidad
     */
    public function rmPremio(PremioInterface $premio, int $cantidad = 1)
    {

    }
}