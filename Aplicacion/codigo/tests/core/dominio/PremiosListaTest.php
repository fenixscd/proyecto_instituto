<?php

namespace tests\core\dominio;

use PHPUnit_Framework_TestCase;
use core\dominio\PremioInterface;
use core\dominio\Premio;
use core\dominio\PremiosLista;



class PremiosListaTest extends PHPUnit_Framework_TestCase
{
    protected $premio;
    protected $otroPremio;
    protected $otroPremioDuplicado;

    public function setUp()
    {
        $this->premio = $this->getMockBuilder(
            'core\dominio\Premio')->getMock();

        $this->premio->method('getIdPremio')->willReturn(1);
        $this->premio->method('getNombre')->willReturn('Premio_Uno');
        //////////////////////////////////////////////////////////////////

        $this->otroPremio = $this->getMockBuilder(
            'core\dominio\PremioInterface')->getMock();

        $this->otroPremio->method('getIdPremio')->willReturn(2);
        $this->otroPremio->method('getNombre')->willReturn('Premio_Dos');
        //////////////////////////////////////////////////////////////////

        $this->otroPremioDuplicado = $this->getMockBuilder(
            'core\dominio\Premio')->getMock();

        $this->otroPremioDuplicado->method('getIdPremio')->willReturn(2);
        $this->otroPremioDuplicado->method('getNombre')->willReturn('Premio_Dos');
     }


    public function testPremiosLista_AlCrear_Premios0() {
        $premiosLista = new PremiosLista();
        $this->assertEquals(0, $premiosLista->countPremios());
    }


    public function testPremiosLista_addPremio_ComprobamosAñadeUnPremio() {
        $premiosLista = new PremiosLista();

        $premiosLista->addPremio($this->premio);
        $this->assertEquals(1, $premiosLista->countPremios());
    }

}