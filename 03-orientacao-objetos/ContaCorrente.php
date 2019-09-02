<?php

class ContaCorrente{

    private $titular;

    public $agencia;

    private $numero;

    private $saldo;

    public function __construct($titular, $agencia, $numero, $saldo)
    {
        $this->titular = $titular;
        $this->agencia = $agencia;
        $this->numero = $numero;
        $this->saldo = $saldo;
    }

    public function depositar($valor)
    {
        $this->saldo += $valor;
        return $this;
    }

    public function sacar($valor)
    {
        $this->saldo -= $valor;
        return $this;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function getTitular()
    {
        return $this->titular;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
    }
}