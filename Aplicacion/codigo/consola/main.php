<?php

include_once '../vendor/autoload.php';

use core\dominio\Premio;
use core\dominio\PremiosLista;

main();

function main ()
{
    probandoPremiosLista();
}

function probandoPremiosLista()
{
    $premio = new Premio();
    $premiosLista = new PremiosLista();

    $premio ->setNombreSorteo('Primer premio')
            ->setCantidad(1);

    //echo $premio->getNombrePremio();

    $premiosLista->addPremio($premio);
    $premiosLista->addPremio($premio);
    //echo 'Numero de premios ';
    echo 'Numero total de premios ' . $premiosLista->getNumeroTotalDePremios();
    echo "\n";
    echo 'Numero total de lineas premios ' . $premiosLista->getNumeroDeLineasDePremio();
}

