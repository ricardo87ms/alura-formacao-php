<?php

require 'ContaCorrente.php';

$contaJoao = new ContaCorrente("João", "122", "121212-2", 500.00);
$contaMaria = new ContaCorrente("Maria", "122", "121214-2", 1500.00);

var_dump($contaJoao);
var_dump($contaMaria);