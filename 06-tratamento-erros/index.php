<?php

require 'Validacao.php';
require 'ContaCorrente.php';

$contaJoao = new ContaCorrente("João", "122", "121212-2", 500.00);
$contaMaria = new ContaCorrente("Maria", "122", "121214-2", 1500.00);
$contaJose = new ContaCorrente("José", "122", "121225-2", 2000.00);
$contaAna = new ContaCorrente("Ana", "122", "121245-5", 3500.00);

echo "<pre>";
var_dump($contaJoao);
echo "</pre>";
echo "<pre>";
var_dump($contaMaria);
echo "</pre>";
echo "<pre>";
var_dump($contaJose);
echo "</pre>";
echo "<pre>";
var_dump($contaAna);
echo "</pre>";
try{
    $contaJoao->transferir(10, $contaAna);
} catch(Exception $erro) {
    echo $erro->getMessage();
}


echo "<pre>";
var_dump($contaJoao);
echo "</pre>";
echo "<pre>";
var_dump($contaAna);
echo "</pre>";


echo $contaJose::$totalDeConta . "<br>";
echo $contaJose::$valorTaxa . "<br>";