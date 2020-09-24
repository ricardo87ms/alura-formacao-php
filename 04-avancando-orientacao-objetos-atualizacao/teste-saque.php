<?php
require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\ContaPoupanca;
use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

$conta = new ContaCorrente(new Titular(new CPF('345.788.888-35'), 'Ricardo Moreira Soares', new Endereco(
    'Tatui',
    'Teste Bairro',
    'teste rua',
    '7898'
)));

$conta->deposita(500);

$conta->saca(100);

var_dump($conta);
