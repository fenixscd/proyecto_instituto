<?php

namespace tests\core\dominio;

use PHPUnit_Framework_TestCase;
use core\dominio\SorteosLista;
use core\dominio\Sorteo;
use core\dominio\Usuario;

class SorteosListaTest extends PHPUnit_Framework_TestCase
{
    protected $sorteo;
    protected $sorteoDos;
    protected $sorteoDuplicado;

    public function testSorteoLista_AlCrear_Sorteos0() {
        $sorteosLista = new SorteosLista();

        $this->assertEquals(0, $sorteosLista->countSorteos());
    }

     public function testSorteosLista_addSorte_ComprobamosAnadeUnSorteo() {
         $sorteosLista = new SorteosLista();
         $usuario = new Usuario();
         $sorteo = new Sorteo($usuario);

         $sorteosLista->addSorteo($sorteo);
         $this->assertEquals(1, $sorteosLista->countSorteos());
    }
}