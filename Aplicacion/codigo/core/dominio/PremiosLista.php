<?php

namespace core\dominio;

use core\dominio\Premio;
use core\dominio\PremioException;
use core\dominio\PremiosListaException;

class PremiosLista
{
    private $premios = array();

    /**
     * @param Premio $premio
     */
    public function addPremio(PremioInterface $premio)
    {
        try {
            $posicionRepetida = $this->buscarPosicionPremio($premio);
            $cantidadAñadir = $premio->getCantidad();
            $premioSeleccionado = $this->premios[$posicionRepetida];
            $premioSeleccionado->addCantidad($cantidadAñadir);

        } catch (PremiosListaException $e) {
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

    /**
     * @return int
     * @throws PremioException
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
     * @return int
     * PremiosListaException
     */
    private function buscarPosicionPremio(PremioInterface $premio)
    {
        foreach ($this->premios as $i => $valor){
            $coinceNombre = $valor->getNombrePremio() === $premio->getNombrePremio();
            if ($coinceNombre) return $i;
        }
        throw new PremiosListaException("El premio especificado no existe");
    }

    /**
     * @param PremioInterface $premio
     * @param int $cantidad
     * @throws PremiosListaException
     */
    public function rmPremio(PremioInterface $premio, int $cantidad = 1)
    {
        if ($cantidad<0){
            throw new PremiosListaException("La cantidad tiene que ser mayor que 0");
        }

        $posicion = $this->buscarPosicionPremio($premio);
        $cantidadContienePremio = $this->premios[$posicion]->getDescripcion();

        $suficientesParaBorrar = $cantidad <= $cantidadContienePremio;

        if ($suficientesParaBorrar){
            throw new PremiosListaException("No hay tantos premios de ese tipo para eliminar");
        }

        $borroLineaCompleta = $cantidadContienePremio === $cantidad;
        if ($borroLineaCompleta){
            // elimino la linea del array;
            unset($this->premios[$posicion]);
        }else{
            $this->premios[$posicion]->rmCantidad($cantidad);
        }

    }
}