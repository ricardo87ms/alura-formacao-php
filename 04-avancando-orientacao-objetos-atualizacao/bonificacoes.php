<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\Desenvolvedor;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\Funcionario;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Service\ControladorDeBonificacoes;

$funcionario = new Desenvolvedor(
    'Ricardo',
    new Cpf('123.456.789-10'),
    'Desenvolvedor',
    1000
);

$funcionario->sobeDeNivel();

$funcionaria = new Gerente(
    'Teste Funcionaria',
    new Cpf('987.654.321-10'),
    'Gerente',
    3000
);

$diretor = new Diretor(
    'Teste Diretor',
    new Cpf('987.423.232-10'),
    'Diretor',
    5000
);


$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($funcionario);
$controlador->adicionaBonificacaoDe($funcionaria);
$controlador->adicionaBonificacaoDe($diretor);

echo $controlador->recuperaTotal();
