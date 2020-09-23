<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta();

$primeiraConta->defineCpfTitular('999.999.444-22');

$primeiraConta->defineNomeTitular('Ricardo Moreira Soares');

$primeiraConta->deposita(500);

$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;

echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;

var_dump($primeiraConta);
