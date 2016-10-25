<?php
/**
 * Created by PhpStorm.
 * User: Samuel
 * Date: 25/10/2016
 * Time: 21:07
 */

namespace core\dominioFactoria;
use core\dominio;

class usuarioFactoria
{
    static public function createUsurio()
    {
        return new Usuario();
    }
}