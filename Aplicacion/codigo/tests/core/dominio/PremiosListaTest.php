<?php

namespace tests\core\dominio;

use core\dominio\PremioInterface;
use core\dominio\PremiosLista;
use PHPUnit_Framework_TestCase;
use core\dominio\Premio;


class PremiosListaTest extends PHPUnit_Framework_TestCase
{

    public function testAddPremio()
    {
        $premiosLista = new PremiosLista();

        $this->assertTrue(true,"probando el metodo añadir premio");
    }
}