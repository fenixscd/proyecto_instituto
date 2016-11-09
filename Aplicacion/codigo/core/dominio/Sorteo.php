<?php

namespace core\dominio;


use core\dominio\SorteoInterface;
use core\dominio\SorteoParticipantesLista;
use DateTime;


class Sorteo implements SorteoInterface
{
    private $idSorteo;
    private $nombreSorteo;
    private $usuario;
    private $participantesLista;
    private $descripcion;
    private $listaPremios;
    private $fechaInicio;
    private $fechaFin;

    public function __construct(UsuarioInterfaz $usurio)
    {
        $this->participantesLista = new SorteoParticipantesLista();
        $this->usuario = $usurio;
    }

    /**
     * @return int
     */
    public function getIdSorteo()
    {
        return $this->idSorteo;
    }

    /**
     * @return string
     */
    public function getNombreSorteo()
    {
        return $this->nombreSorteo;
    }

    /**
     *
     * @return SorteoParticipantesLista
     */
    public function getParticipantes()
    {
        return $this->participantesLista;
    }

    /**
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function getListaPremios()
    {
        return $this->listaPremios;
    }

    /**
     *
     * @return \DateTime
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     *
     * @return \DateTime
     */
    public function getFechaFin()
    {
        return $this->fechaFin;
    }

    public function setUsuario(UsuarioInterfaz $usuario)
    {
        $this->usuario = $usuario;
        return $this;
    }

    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @param int idSorteo
     * @return Sorteo
     */
    public function setIdSorteo (int $idSorteo)
    {
        $this->idSorteo = $idSorteo;
        return  $this;
    }

    /**
     * @param string nombreSorteo
     * @return Sorteo
     */
    public function setNombreSorteo(string $nombreSorteo)
    {
        $this->nombreSorteo = $nombreSorteo;
        return $this;
    }

    /**
     * @param string descripcion
     * @return Sorteo
     */
    public function setDescripcion(string $descripcion)
    {
        $this->descripcion = $descripcion;
        return $this;
    }

    /**
     * @param string fechaInicio
     * @return Sorteo
     */
    public function setFechaInicio(string $fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;
        return $this;
    }

    /**
     * @param string fechaFin
     * @return Sorteo
     */
    public function setFechaFin(string $fechaFin)
    {
        $this->fechaFin = $fechaFin;
        return $this;
    }

    public function addParticipante(UsuarioInterfaz $usuario)
    {
        $apuntado = $this->participantesLista->isParticipanteApuntado($usuario);
        if ($apuntado){
            throw new SorteoException("El usuario ya esta apuntado");
        }

        $creador = $this->usuario->getNombreUsuario();
        $participante = $usuario->getNombreUsuario();

        $creadorIgualParticipante = $creador === $participante;

        if ($creadorIgualParticipante){
            throw new SorteoException("El usuario que ha creado el sorteo no se puede apunatar");
        }

        $this->participantesLista->addUsuario($usuario);
    }

    public function getTotalParticipantes()
    {
        return $this->participantesLista->getTotalParticipantes();
    }
}