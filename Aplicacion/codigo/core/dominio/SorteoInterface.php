<?php
namespace core\dominio;


interface SorteoInterface
{
    /**
     * @return int
     */
    public function getIdSorteo();

    /**
     * @return string
     */
    public function getNombreSorteo();

    /**
     *
     * @return Usuario
     */
    public function getParticipantes();

    /**
     *
     * @return string
     */
    public function getDescripcion();


    /**
     *
     * @return SorteosLista
     */
    public function getListaPremios();

    /**
     *
     * @return \DateTime
     */
    public function getFechaInicio();

    /**
     *
     * @return \DateTime
     */
    public function getFechaFin();

    /**
     * @param int idSorteo
     * @return Sorteo
     */
    public function setIdSorteo (int $idSorteo);

    /**
     * @param string nombreSorteo
     * @return Sorteo
     */
    public function setNombreSorteo(string $nombreSorteo);

    /**
     * @param Usuario usuario
     * @return Sorteo
     */

    public function setDescripcion(string $descripcion);

    /**
     * @param string fechaInicio
     * @return Sorteo
     */
    public function setFechaInicio(string $fechaInicio);

    /**
     * @param string fechaFin
     * @return Sorteo
     */
    public function setFechaFin(string $fechaFin);

    public function setUsuario(UsuarioInterfaz $usuario);

    public function getUsuario();
}