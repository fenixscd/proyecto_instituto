<?php
/**
 * Step 1: Require the Slim Framework using Composer's autoloader
 *
 * If you are not using Composer, you need to load Slim Framework with your own
 * PSR-4 autoloader.
 */
require_once '../../vendor/autoload.php';

use Slim\Slim;

$app = new Slim();

$app->get('/', function () {
    echo phpinfo();
});

$app->get('/hola',function (){
    echo 'Hola';
});

$app->get('/hola/:nombre',function ($nombre){
    echo 'Hola '. $nombre;
});

$app->run();
//echo phpinfo();