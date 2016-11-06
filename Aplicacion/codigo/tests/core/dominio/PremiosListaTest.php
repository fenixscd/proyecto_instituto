<?php

namespace tests\core\dominio;

use PHPUnit_Framework_TestCase;
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
    }


    public function testPremiosLista_AlCrear_Premios0()
    {
        $premiosLista = new PremiosLista();
        $this->assertEquals(0, $premiosLista->getNumeroDeLineasDePremio());
    }


    public function testPremiosLista_addPremio_ComprobamosAñadeUnPremio()
    {
        $premiosLista = new PremiosLista();

        $premiosLista->addPremio($this->premio);
        $this->assertEquals(1, $premiosLista->getNumeroDeLineasDePremio());
    }

    public function testPremiosLista_addPremio_ComprobarSiSumaPremio()
    {
        $premiosLista = new PremiosLista();
        $premio = new Premio();
        $premioDuplicado = new Premio();

        $premio ->setNombreSorteo('Primer premio')
        ->setCantidad(1);

        $premioDuplicado ->setNombreSorteo('Primer premio')
        ->setCantidad(1);

        $premiosLista->addPremio($premioDuplicado);
        $premiosLista->addPremio($premio);

        $this->assertEquals(2, $premiosLista->getNumeroTotalDePremios(),"Numero_total_de_premios");
        $this->assertEquals(1, $premiosLista->getNumeroDeLineasDePremio());
    }

    public function testPremiosLista_rmPremio_siExisteYhayMasDeUno()
    {
        $premiosLista = new PremiosLista();
        $premio = new Premio();
        $premioDos = new Premio();
        $premioBorrar = new Premio();

        $premio ->setNombreSorteo('Primer premio')
        ->setCantidad(2);

        $premioDos ->setNombreSorteo('Primer dos')
        ->setCantidad(2);

        $premioBorrar ->setNombreSorteo('Primer premio')
        ->setCantidad(1);

        $premiosLista->addPremio($premio);
        $premiosLista->addPremio($premioDos);

        $premiosLista->rmPremio($premioBorrar, 1);

        $this->assertEquals(3, $premiosLista->getNumeroTotalDePremios(),"rmPremio despues de borrar");
        $this->assertEquals(2, $premiosLista->getNumeroDeLineasDePremio(),"rmPremio despues de borrar");
    }

    /**
     * @expectedException core\dominio\PremiosListaException
     */
    public function testPremiosLista_rmPremio_siLaCantidadEsMenorOIgualA0()
    {
        $premiosLista = new PremiosLista();
        $premioBorrar = new Premio();
        $premiosLista->rmPremio($premioBorrar, -1);
    }

    /**
     * @expectedException core\dominio\PremiosListaException
     */
    public function testPremiosLista_rmPremio_siNoExisteElPremio()
    {
        $premiosLista = new PremiosLista();
        $premio = new Premio();
        $premioBorrar = new Premio();

        $premio ->setNombreSorteo('Primer premio')
                ->setCantidad(2);

        $premioBorrar   ->setNombreSorteo('Primer prem')
                        ->setCantidad(1);

        $premiosLista->addPremio($premio);
        $premiosLista->rmPremio($premioBorrar, 1);
    }

    /**
     * @expectedException core\dominio\PremiosListaException
     */
    public function testPremiosLista_rmPremio_siNoHaySuficientesPremios()
    {
$premiosLista = new PremiosLista();
        $premio = new Premio();
        $premioBorrar = new Premio();

        $premio ->setNombreSorteo('Primer premio')
        ->setCantidad(2);

        $premioBorrar   ->setNombreSorteo('Primer prem')
        ->setCantidad(1);

        $premiosLista->addPremio($premio);
        $premiosLista->rmPremio($premioBorrar, 5);
    }


    public function testPremiosLista_rmPremio_siSeBorraLaLineaCompleta()
    {
        $premiosLista = new PremiosLista();
        $premio = new Premio();
        $premioDos = new Premio();
        $premioBorrar = new Premio();

        $premio ->setNombreSorteo('Primer premio')
        ->setCantidad(2);

        $premioDos ->setNombreSorteo('Primer dos')
        ->setCantidad(2);

        $premioBorrar   ->setNombreSorteo('Primer premio')
        ->setCantidad(2);

        $premiosLista->addPremio($premio);
        $premiosLista->rmPremio($premioBorrar, 5);

        $this->assertEquals(1, $premiosLista->getNumeroDeLineasDePremio(),"rmPremio despues de borrar");
    }

}