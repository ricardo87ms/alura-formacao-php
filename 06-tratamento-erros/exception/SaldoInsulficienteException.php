<?php

class SaldoInsulficienteException extends Exception
{
    public function __construct($mensagem, $codigo = null, $ex = null)
    {
        parent::__construct($mensagem, $codigo = null, $ex = null);
    }
}