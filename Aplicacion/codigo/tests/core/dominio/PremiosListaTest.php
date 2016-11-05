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
        $this->premio->method('getNombrePremio')->willReturn('Premio_Uno');
        $this->premio->method('getCantidad')->willReturn(1);
        //////////////////////////////////////////////////////////////////

        $this->otroPremio = $this->getMockBuilder(
            'core\dominio\Premio')->getMock();

        $this->otroPremio->method('getIdPremio')->willReturn(2);
        $this->otroPremio->method('getNombrePremio')->willReturn('Premio_Dos');
        $this->otroPremio->method('getCantidad')->willReturn(1);
        //////////////////////////////////////////////////////////////////

        $this->otroPremioDuplicado = $this->getMockBuilder(
            'core\dominio\Premio')->getMock();

        $this->otroPremioDuplicado->method('getIdPremio')->willReturn(2);
        $this->otroPremioDuplicado->method('getNombrePremio')->willReturn('Premio_Dos');
        $this->otroPremioDuplicado->method('getCantidad')->willReturn(1);
    }


//     public function testPremiosLista_AlCrear_Premios0()
//     {
//         $premiosLista = new PremiosLista();
//         $this->assertEquals(0, $premiosLista->getNumeroDeLineasDePremio());
//     }


//     public function testPremiosLista_addPremio_ComprobamosAñadeUnPremio()
//     {
//         $premiosLista = new PremiosLista();

//         $premiosLista->addPremio($this->premio);
//         $this->assertEquals(1, $premiosLista->getNumeroDeLineasDePremio());
//     }

    public function testPremiosLista_addPremio_ComprobarSiSumaPremio()
    {
        $premiosLista = new PremiosLista();
        $premiosLista->addPremio($this->premio);
        $premiosLista->addPremio($this->premio);

        $this->assertEquals(2, $premiosLista->getNumeroTotalDePremios(),"Numero_total_de_premios");
        $this->assertEquals(1, $premiosLista->getNumeroDeLineasDePremio());


    }
}