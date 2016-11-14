<?php

namespace core\dominio;


use core\dominio\SorteoInterface;
use core\dominio\SorteoParticipantesLista;
use core\dominio\ParticipantesLista;
use DateTime;
use phpDocumentor\Reflection\Types\This;


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

    public function __construct(UsuarioInterfaz $usuario,
                                                $fechaInicio=null,
                                                $fechaFin=null)
    {
        $this->participantesLista = new ParticipantesLista();
        $this->usuario = $usuario;
        if ($fechaInicio !== null) $this->setFechaInicio($fechaInicio);
        if ($fechaFin !== null) $this->setFechaFin($fechaFin);
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
     * @return DateTime
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     *
     * @return DateTime
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
        $this->fechaInicio = new DateTime($fechaInicio);
        return $this;
    }

    /**
     * @param string fechaFin
     * @return Sorteo
     */
    public function setFechaFin(string $fechaFin)
    {
        $this->fechaFin = new DateTime($fechaFin);
        return $this;
    }

    public function addParticipante(ParticipanteInterface $participante)
    {
        $apuntado = $this->participantesLista->isParticipanteApuntado($participante);
        $fechaInscripcion = $participante->getFechaInscripcion();

        if ($apuntado){
            throw new SorteoException("El usuario ya esta apuntado");
        }

        if ($this->isCreadorIgualParticipante($participante)){
            throw new SorteoException("El usuario que ha creado el sorteo no se puede apunatar");
        }

        if (!$this->isFechaInicioAsignada()){
            throw new SorteoException("El sorteo todavia no tiene una fecha de inicio asignada");
        }

        if(!$this->isFechaFinAsignada()){
            throw new SorteoException("El sorteo todavia no tiene una fecha de finalizacion asignada");
        }

        $this->participantesLista->addParticipante($participante);
    }

    public function getTotalParticipantes()
    {
        return $this->participantesLista->getTotalParticipantes();
    }

    private function isSorteoIniciado(DateTime $fechaApuntarse)
    {
        return ($this->fechaInicio < $fechaApuntarse);
    }

    private function isSorteoFinalizado(DateTime $fechaApuntarse)
    {
        return ($this->fechaFin > $fechaApuntarse);
    }

    private function isSorteoActivo(DateTime $fechaApuntarse)
    {
        return $this->isSorteoFinalizado($fechaApuntarse) && $this->isSorteoIniciado($fechaApuntarse);
    }


    private function isFechaInicioAsignada()
    {
        if ($this->fechaInicio == null) return false;
        else return true;
    }

    private function isFechaFinAsignada()
    {
        if($this->fechaFin == null) return false;
        else return true;
    }

    private function isCreadorIgualParticipante(ParticipanteInterface $participante)
    {
        $creador = $this->usuario->getNombreUsuario();
        $part = $participante->getUsuario();
        $part = $part->getNombreUsuario();

        return $creador === $part;
    }
}