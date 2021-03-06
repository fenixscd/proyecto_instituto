<?php

namespace tests\core\dominio;

use PHPUnit_Framework_TestCase;
use core\dominio\Usuario;
use core\dominio\SorteoParticipantesLista;

class UsuariosSorteos extends PHPUnit_Framework_TestCase
{
    public function testSorteoParticipanteLista_anadeUnUsuraio()
    {
        $SorteoParticipantesLista = new SorteoParticipantesLista();
        $usuario = new Usuario();

        $SorteoParticipantesLista->addUsuario($usuario);

        $this->assertEquals(1, $SorteoParticipantesLista->getTotalParticipantes());
    }

    public function testSorteoParticipanteLista_isParticipanteYaEstaApuntado()
    {
        $SorteoParticipantesLista = new SorteoParticipantesLista();
        $usuario = new Usuario();

        $SorteoParticipantesLista->addUsuario($usuario);

        $this->assertTrue($SorteoParticipantesLista->isParticipanteApuntado($usuario));
    }

    public function testSorteoParticipanteLista_isParticipanteNoApuntado()
    {
        $SorteoParticipantesLista = new SorteoParticipantesLista();
        $usuario = new Usuario();
        $usuario->setNombreUsuario("Manolo");
        $usuarioBuscar = new Usuario();
        $usuarioBuscar->setNombreUsuario("Pepe");

        $SorteoParticipantesLista->addUsuario($usuario);

        $this->assertFalse($SorteoParticipantesLista->isParticipanteApuntado($usuarioBuscar));
    }
}