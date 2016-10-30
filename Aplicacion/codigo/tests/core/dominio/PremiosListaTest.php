<?php

namespace tests\core\dominio;

use core\dominio\PremioInterface;
use core\dominio\PremiosLista;
use PHPUnit_Framework_TestCase;
use core\dominio\Premio;
use phpDocumentor\Reflection\Types\Boolean;


class PremiosListaTest extends PHPUnit_Framework_TestCase
{
    protected $premio;
    protected $otroPremio;

    public function setUp()
    {
        $this->premio = $this->getMockBuilder(
            'core\dominio\PremioInterface;')->getMock();

        $this->premio->method('getIdPremio')->willReturn(1);
        $this->premio->method('getNombre')->willReturn('Premio_Uno');
        //////////////////////////////////////////////////////////////////

        $this->premio = $this->getMockBuilder(
            'core\dominio\PremioInterface;')->getMock();

        $this->premio->method('getIdPremio')->willReturn(2);
        $this->premio->method('getNombre')->willReturn('Premio_Dos');
        //////////////////////////////////////////////////////////////////

        $this->premio = $this->getMockBuilder(
            'core\dominio\PremioInterface;')->getMock();

        $this->premio->method('getIdPremio')->willReturn(2);
        $this->premio->method('getNombre')->willReturn('Premio_Dos');
    }



    public function testAddPremioNombresDuplicados()
    {

        $premiosLista = new PremiosLista();

        $this->assertTrue($validar);
    }
}