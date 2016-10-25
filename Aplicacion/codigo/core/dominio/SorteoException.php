<?php
/**
 * Created by PhpStorm.
 * User: Samuel
 * Date: 25/10/2016
 * Time: 21:26
 */

namespace core\dominio;
use Exception;

class SorteoException extends Exception
{
    private $previo = "SORTEO: ";
    public function __construct($message, $code = 0, Exception $previous = null) {
        $message = $this->previo . $message;
        parent::__construct($message, $code, $previous);
    }

    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}