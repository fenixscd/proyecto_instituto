<?php

namespace tests\core\dominio;

use PHPUnit_Framework_TestCase;
use core\dominio\Sorteo;
use core\dominio\Usuario;
use core\dominio\Participante;

class SorteoTest extends PHPUnit_Framework_TestCase
{
    protected $usuario;
    protected $sorteo;
    protected $usuarioParticipante;

    public function setUp()
    {
        $this->usuario = new Usuario();
        $this->usuarioParticipante = new Usuario();
        $this->sorteo = new Sorteo($this->usuario);
        $this->usuario->setNombreUsuario("Franki");
        $this->sorteo->setFechaInicio('02/31/2011');
        $this->sorteo->setFechaFin('05/31/2011');
    }

    public function testAddUsurio_siEstaVaciaALcrerLaLista()
    {
        $this->assertEquals(0, $this->sorteo->getTotalParticipantes());
    }

    public function testAddUsuario_siElParticipanteNoEstaApuntado()
    {

        $this->usuarioParticipante->setNombreUsuario("Carlos");

        $participante = new Participante($this->usuarioParticipante);

         $this->sorteo->addParticipante($participante);
         $this->assertEquals(1, $this->sorteo->getTotalParticipantes());
    }

    /**
     * @expectedException core\dominio\SorteoException
     */
    public function testAddParticipante_siElUsuarioYaEstaApuntado()
    {
        $this->usuarioParticipante->setNombreUsuario("Pepe");

        $participante = new Participante($this->usuarioParticipante);

        $this->sorteo->addParticipante($participante);
        $this->sorteo->addParticipante($participante);
    }

    /**
     * @expectedException core\dominio\SorteoException
     */
    public function testAddParticipante_siCoincideElParticipanteConElCreador()
    {
        $participante = new Participante($this->usuario);
        $this->sorteo->addParticipante($participante);
    }

    public function testAddParticipante_elSorteoEstaActivo()
    {
        $this->sorteo->setFechaInicio("5/10/2016");
        $this->sorteo->setFechaFin("6/10/2016");
        $participante = new Participante($this->usuarioParticipante, "6/10/2016");
        $this->sorteo->addParticipante($participante);

        $this->assertEquals(1, $this->sorteo->getTotalParticipantes());
    }
}