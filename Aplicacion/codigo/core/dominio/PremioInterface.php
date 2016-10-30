<?php

namespace core\dominio;

interface PremioInterface
{
    /**
     * @return int
     */
    public function getIdPremio();

    /**
     * @return string
     */
    public function getNombre();

    /**
     * @return string
     */
    public function getDescripcion();

    /**
     * @return int
     */
    public function getCantidad();




    /**
     * @param int
     * @return PremioInterface
     */
    public function setIdPremio(int $idPremio);

    /**
     * @param string $nombre
     * @return PremioInterface
     */
    public function setNombre(string $nombre);

    /**
     * @param string $descripcion
     * @return PremioInterface
     */
    public function setDescripcion(string $descripcion);

    /**
     * @param int $cantidad
     * @return PremioInterface
     */
    public function setCantidad(int $cantidad);
}