<?php

namespace core\dominio;

use Exception;

class UsuarioException extends Exception
{
    private $previo = "USUARIO: ";

    public function __construct($message, $code = 0, Exception $previous = null) {
        $message = $this->previo . $message;
        parent::__construct($message, $code, $previous);
    }

    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}