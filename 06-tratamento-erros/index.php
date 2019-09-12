<?php

require 'Validacao.php';
require 'ContaCorrente.php';

$contaJoao = new ContaCorrente("João", "122", "121212-2", 500.00);
$contaMaria = new ContaCorrente("Maria", "122", "121214-2", 1500.00);
$contaJose = new ContaCorrente("José", "122", "121225-2", 2000.00);

echo "<pre>";
var_dump($contaJoao);
echo "</pre>";
echo "<pre>";
var_dump($contaMaria);
echo "</pre>";
echo "<pre>";
var_dump($contaJose);
echo "</pre>";

echo $contaJose::$totalDeConta . "<br>";
echo $contaJose::$valorTaxa . "<br>";