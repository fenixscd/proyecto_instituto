<?php

namespace core\dominio;
use core\dominio\PremioInterface;
use core\dominio\PremioException;


class Premio implements PremioInterface
{
    private $idPremio;
    private $nombrePremio;
    private $descripcion;
    private $cantidad;

    public function getIdPremio()
    {
        return $this->idPremio;
    }

    public function getNombrePremio()
    {
        return $this->nombrePremio;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function getCantidad()
    {
        return $this->cantidad;
    }

    public function setIdPremio(int $idPremio)
    {
        $this->idPremio = $idPremio;
        return $this;
    }

    public function setNombreSorteo(string $nombrePremio)
    {
        $this->nombrePremio = $nombrePremio;
        return $this;
    }
    public function setDescripcion(string $descripcion)
    {
        $this->descripcion = $descripcion;
        return $this;
    }
    public function setCantidad(int $cantidad)
    {
        $this->cantidad = $cantidad;
        return $this;
    }

    public function addCantidad(int $cantidad)
    {
        $this->cantidad = $this->cantidad + $cantidad;
        return $this;
    }

    public function rmCantidad(int $cantidad)
    {
        if ($cantidad<0){
            throw new PremioException("No se pueden quitar números negativos");
        }
        $this->cantidad = $this->cantidad - $cantidad;
        return $this;
    }
}