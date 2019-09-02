<?php

require 'ContaCorrente.php';

$contaJoao = new ContaCorrente("João", "122", "121212-2", 500.00);
$contaMaria = new ContaCorrente("Maria", "122", "121214-2", 1500.00);

echo $contaJoao->titular . PHP_EOL;
echo $contaJoao->getSaldo() . PHP_EOL;

var_dump($contaJoao);
var_dump($contaMaria);

$contaJoao->depositar(200.50);

var_dump($contaJoao);

$contaJoao->sacar(100.50)->depositar(50);

var_dump($contaJoao);