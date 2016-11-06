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
    public function getNombrePremio();

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
     * @param string $nombrePremio
     * @return PremioInterface
     */
    public function setNombreSorteo(string $nombrePremio);

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

    /**
     * @param int $cantidad
     * @return PremioInterface
     */
    public function addCantidad(int $cantidad);


}