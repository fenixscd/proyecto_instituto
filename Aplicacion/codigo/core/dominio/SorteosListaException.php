<?php

namespace core\dominio;
//use Exception;


class SorteosListaException extends \Exception {
    public function __construct($message = null, $code = 0, Exception $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}