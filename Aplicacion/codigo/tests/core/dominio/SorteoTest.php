<?php

namespace tests\core\dominio;

use PHPUnit_Framework_TestCase;
use core\dominio\Sorteo;
use core\dominio\Usuario;

class SorteoTest extends PHPUnit_Framework_TestCase
{

    public function testAddUsurio_siEstaVaciaALcrerLaLista()
    {
        $sorteo = new Sorteo();
        $this->assertEquals(0, $sorteo->getTotalParticipantes());
    }

    public function testAddUsuario_siElUsuarioNoEsaApuntado()
    {
        $sorteo = new Sorteo();
        $usuario = new Usuario();
        $usuario->setNombreUsuario("manolo");
        $sorteo->addParticipante($usuario);

        $this->assertEquals(1, $sorteo->getTotalParticipantes());
    }

    /**
     * @expectedException core\dominio\SorteoException
     */
    public function testAddUsuario_siElUsuarioYaEstaApuntado()
    {
        $sorteo = new Sorteo();
        $usuario = new Usuario();
        $usuarioRepetido = new Usuario();
        $usuario->setNombreUsuario("manolo");
        $usuarioRepetido->setNombreUsuario("manolo");

        $sorteo->addParticipante($usuario);
        $sorteo->addParticipante($usuarioRepetido);

    }
}