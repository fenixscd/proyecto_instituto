<?php

namespace tests\core\dominio;

use core\dominio\PremioInterface;
use core\dominio\PremiosLista;
use PHPUnit_Framework_TestCase;
use core\dominio\Premio;
use phpDocumentor\Reflection\Types\Boolean;


class PremiosListaTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider testAddPremio
     */
    public function providerAddPremio()
    {
        return [
            'Es true'  => [true],
            'Es false' => [true],
            'Es false' => [true]
        ];
    }

    /**
     * @dataProvider providerAddPremio
     */
    public function testAddPremio($validar)
    {
        $premiosLista = new PremiosLista();

        $this->assertTrue($validar);
    }
}