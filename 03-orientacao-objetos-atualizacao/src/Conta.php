<?php

class Conta
{
    public $cpfTitutar;
    public $nomeTitular;
    private $saldo;
    private static $numeroDeContas = 0;

    public function __construct(string $cpfTitular, string $nomeTitular)
    {
        $this->cpfTitutar = $cpfTitular;
        $this->validaNomeTitular($nomeTitular);
        $this->nomeTitular = $nomeTitular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function saca(float $valorASacar): void
    {
        if ($valorASacar > $this->saldo) {
            echo 'Saldo Indisponível!!!';
            return;
        }
        $this->saldo -= $valorASacar;
    }

    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo 'Não é possível depositar um valor negativo!!!';
            return;
        }
        $this->saldo += $valorADepositar;
    }

    public function transfere(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo 'Não existe saldo disponível para transferência!!!';
            return;
        }

        $this->saca($valorATransferir);
        $contaDestino->deposita($valorATransferir);
    }

    public function recuperaSaldo()
    {
        return $this->saldo;
    }

    // public function defineCpfTitular(String $cpf)
    // {
    //     $this->cpfTitutar = $cpf;
    // }

    public function recuperaCpfTitular()
    {
        return $this->cpfTitutar;
    }

    // public function defineNomeTitular(string $nome)
    // {
    //     $this->nomeTitular = $nome;
    // }

    public function recuperaNomeTitular()
    {
        return $this->nomeTitular;
    }

    private function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

    public static function recuperaNumeroDeContas()
    {
        return self::$numeroDeContas;
    }
}
