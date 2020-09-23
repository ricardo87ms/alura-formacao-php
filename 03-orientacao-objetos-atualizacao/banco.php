<?php

require_once 'src/Conta.php';

// $primeiraConta = new Conta('999.999.444-22', 'Ana'); //Erro validação

$primeiraConta = new Conta('999.444.444-22', 'Ricardo Moreira Soares');

$segundaConta = new Conta('999.343.444-22', 'Teste de Nome');

// $primeiraConta->defineCpfTitular('999.999.444-22');

// $primeiraConta->defineNomeTitular('Ricardo Moreira Soares');

$primeiraConta->deposita(500);

$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;

echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;

var_dump($primeiraConta);

echo Conta::recuperaNumeroDeContas();
