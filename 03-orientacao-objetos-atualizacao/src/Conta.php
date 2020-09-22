<?php

class Conta
{
    public $cpfTitutar;
    public $nomeTitular;
    public $saldo = 0;

    public function sacar(float $valorASacar): void
    {
        if ($valorASacar > $this->saldo) {
            echo 'Saldo Indisponível!!!';
            return;
        }
        $this->saldo -= $valorASacar;
    }

    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo 'Não é possível depositar um valor negativo!!!';
            return;
        }
        $this->saldo += $valorADepositar;
    }

    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo 'Não existe saldo disponível para transferência!!!';
            return;
        }

        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }
}
