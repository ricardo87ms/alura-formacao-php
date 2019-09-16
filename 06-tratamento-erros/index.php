<?php

require 'Validacao.php';
require 'ContaCorrente.php';

// use Exceptions\Validacao;
// use Exceptions\ContaCorrente;

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
// try {
//     $contaJoao['teste'] = 'teste';
// } catch (Error $erro) {
//     echo $erro->getMessage();
// }

try{
    $contaJoao->transferir(1000, $contaAna);
} catch(InvalidArgumentException $erro) {
    echo "invalid Argument";
    echo $erro->getMessage();
} catch(Exception $erro) {
    echo "Exception";
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