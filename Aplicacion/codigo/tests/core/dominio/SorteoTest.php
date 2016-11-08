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
        echo "\nEntra en el test\n";
        $sorteo->addParticipante($usuario);

        $this->assertEquals(1, $sorteo->getTotalParticipantes());
    }
}