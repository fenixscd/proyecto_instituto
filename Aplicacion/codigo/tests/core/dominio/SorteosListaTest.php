<?php

namespace tests\core\dominio;

use PHPUnit_Framework_TestCase;
use core\dominio\SorteosLista;
use core\dominio\Sorteo;

class SorteosListaTest extends PHPUnit_Framework_TestCase
{
    protected $sorteo;
    protected $sorteoDos;
    protected $sorteoDuplicado;

    public function setUp()
    {


        $this->sorteo = $this->getMockBuilder('core\dominio\Sorteo')->getMock();


        $this->sorteo->method('getIdSorteo')->willReturn(1);
        $this->sorteo->method('getNombreSorteo')->willReturn('Sorteo_Uno');
        //////////////////////////////////////////////////////////////////

        $this->sorteoDos = $this->getMockBuilder(
            'core\dominio\Sorteo')->getMock();

        $this->sorteoDos->method('getIdSorteo')->willReturn(2);
        $this->sorteoDos->method('getNombreSorteo')->willReturn('Sorteo_dos');
        //////////////////////////////////////////////////////////////////

         $this->sorteoDuplicado = $this->getMockBuilder(
             'core\dominio\Sorteo')->getMock();

         $this->sorteoDuplicado->method('getIdSorteo')->willReturn(1);
        $this->sorteoDuplicado->method('getNombreSorteo')->willReturn('Duplicado');
    }

    public function testSorteoLista_AlCrear_Sorteos0() {
        $sorteosLista = new SorteosLista();

        $this->assertEquals(0, $sorteosLista->countSorteos());
    }

     public function testSorteosLista_addSorte_ComprobamosAñadeUnSorteo() {
         $sorteosLista = new SorteosLista();

        $sorteosLista->addSorteo($this->sorteo);
        $this->assertEquals(1, $sorteosLista->countSorteos());
    }
}