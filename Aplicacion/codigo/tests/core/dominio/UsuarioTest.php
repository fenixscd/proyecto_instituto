<?php

namespace tests\core\dominio;

use PHPUnit_Framework_TestCase;
use core\dominio\Usuario;

class UsuarioTest extends PHPUnit_Framework_TestCase
{
    public function testIsElMismo_siElUsuarioEsElMismo()
    {
        $usuario = new Usuario();
        $usuario->setNombreUsuario("Manolo");

        $this->assertTrue($usuario->isElMismo($usuario));
    }

    public function testIsElMismo_noElUsuarioEsElMismo()
    {
        $usuario = new Usuario();
        $usuario2 = new Usuario();
        $usuario->setNombreUsuario("Manolo");
        $usuario2->setNombreUsuario("Pablo");

        $this->assertFalse($usuario->isElMismo($usuario2));
    }

    public function testisNombreEsNuloOVacio_siEsnulo()
    {
        $usuario = new Usuario();
        $this->assertFalse($usuario->isNombreEsNuloOVacio());
    }

    public function testisNombreEsNuloOVacio_estaVacio()
    {
        $usuario = new Usuario();
        $this->assertFalse($usuario->isNombreEsNuloOVacio());
    }

    public function testisNombreEsNuloOVacio_noEsnulo()
    {
        $usuario = new Usuario();
        $usuario->setNombreUsuario("Manolo");
        $this->assertTrue($usuario->isNombreEsNuloOVacio());
    }

    public function testisNombreEsNuloOVacio_noEstaVacio()
    {
        $usuario = new Usuario();
        $usuario->setNombreUsuario("Manolo");
        $this->assertTrue($usuario->isNombreEsNuloOVacio());
    }



}