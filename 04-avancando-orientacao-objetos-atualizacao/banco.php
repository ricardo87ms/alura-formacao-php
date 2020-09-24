<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Cpf;

$endereco = new Endereco('Tatuí', 'teste', 'rua teste', '4545d');

// $primeiraConta = new Conta('999.999.444-22', 'Ana'); //Erro validação

$ricardo = new Titular(new Cpf('999.444.444-22'), 'Ricardo Moreira Soares', $endereco);

$primeiraConta = new Conta($ricardo);

$teste = new Titular(new Cpf('999.343.444-22'), 'Teste de Nome', $endereco);

$segundaConta = new Conta($teste);

// $primeiraConta->defineCpfTitular('999.999.444-22');

// $primeiraConta->defineNomeTitular('Ricardo Moreira Soares');

$primeiraConta->deposita(500);

$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;

echo $primeiraConta->recuperaCpfTitular()->recuperaNumero() . PHP_EOL;

var_dump($primeiraConta);

echo Conta::recuperaNumeroDeContas();
