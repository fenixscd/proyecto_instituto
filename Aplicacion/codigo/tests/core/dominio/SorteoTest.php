<?php

namespace tests\core\dominio;

use PHPUnit_Framework_TestCase;
use core\dominio\Sorteo;
use core\dominio\Usuario;

class SorteoTest extends PHPUnit_Framework_TestCase
{

//     public function testAddUsurio_siEstaVaciaALcrerLaLista()
//     {
//         $usuario = new Usuario();
//         $sorteo = new Sorteo($usuario);
//         $this->assertEquals(0, $sorteo->getTotalParticipantes());
//     }

    public function testAddUsuario_siElParticipanteNoEstaApuntado()
    {

        $usuario = new Usuario();
        $usuario->setNombreUsuario("manolo");

        $participante = new Usuario();
        $participante->setNombreUsuario("Participante");

        $sorteo = new Sorteo($usuario);
        $sorteo->addParticipante($participante);

        $this->assertEquals(1, $sorteo->getTotalParticipantes());
    }

    /**
     * @expectedException core\dominio\SorteoException
     */
//     public function testAddParticipante_siElUsuarioYaEstaApuntado()
//     {
//         $usuarioCreador = new Usuario();
//         $sorteo = new Sorteo($usuarioCreador);
//         $usuario = new Usuario();
//         $usuarioRepetido = new Usuario();
//         $usuario->setNombreUsuario("manolo");
//         $usuarioRepetido->setNombreUsuario("manolo");

//         $sorteo->addParticipante($usuario);
//         $sorteo->addParticipante($usuarioRepetido);
//     }

    /**
     * @expectedException core\dominio\SorteoException
     */
//     public function testAddParticipante_siCoincideElParticipanteConElCreador()
//     {
//         $usuarioCreador = new Usuario();
//         $sorteo = new Sorteo($usuarioCreador);
//         $usuario = new Usuario();

//         $usuario->setNombreUsuario("manolo");

//         $sorteo->setUsuario($usuario);
//         $sorteo->addParticipante($usuario);
//     }

//     public function testAddParticipante_elSorteoEstaActivo()
//     {
//         $usuarioCreador = new Usuario();
//         $sorteo = new Sorteo($usuarioCreador);

//         $sorteo->isSorteoActivo();
//     }

    /**
     * @expectedException core\dominio\SorteoException
     */
//     public function testAddParticipante_elSorteoHAFinalizado(){
//         $usuarioCreador = new Usuario();
//         $sorteo = new Sorteo($usuarioCreador);
//         $usuario = new Usuario();
//     }
}