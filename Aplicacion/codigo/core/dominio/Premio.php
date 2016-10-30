<?php

namespace core\dominio;


class Premio implements PremioInterface
{
    private $idPremio;
    private $nombre;
    private $descripcion;
    private $cantidad;

    public function getIdPremio()
    {
        return $this->idPremio;
    }

    public function getNombre()
    {
        return $this->nombre;
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

    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;
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
}