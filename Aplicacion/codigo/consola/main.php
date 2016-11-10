<?php

include_once '../vendor/autoload.php';

//use core\dominio\Premio;
//use core\dominio\PremiosLista;
use core\dominio\Sorteo;
use core\dominio\Usuario;
//use core\dominio\PremiosLista;

main();

function main ()
{
    //testAddUsuario_siElUsuarioNoEsaApuntado();
    fecha();
}

// function probandoPremiosLista()
// {
//     $premio = new Premio();
//     $premiosLista = new PremiosLista();

//     $premio ->setNombreSorteo('Primer premio')
//             ->setCantidad(1);

//     //echo $premio->getNombrePremio();

//     $premiosLista->addPremio($premio);
//     $premiosLista->addPremio($premio);
//     //echo 'Numero de premios ';
//     echo 'Numero total de premios ' . $premiosLista->getNumeroTotalDePremios();
//     echo "\n";
//     echo 'Numero total de lineas premios ' . $premiosLista->getNumeroDeLineasDePremio();
// }

 function testAddUsuario_siElUsuarioNoEsaApuntado()
{
    $sorteo = new Sorteo();
    $usuario = new Usuario();
    $usuario->setNombreUsuario("manolo");
    echo "\nEntra en el test\n";
    $sorteo->addParticipante($usuario);

    echo "\nAl final son ";
    echo $sorteo->getTotalParticipantes();
}

function fecha()
{
    $usuario = new Usuario();
    $sorteo = new Sorteo($usuario, null,'2013-06-19 18:25');

    $fechaApuntarse = date_create('2013-06-19 18:26');

    if ($sorteo->isSorteoFinalizado($fechaApuntarse)) echo "El sorteo NO ha finalizado";
    else echo "El sorteo ha finalizado";

}

