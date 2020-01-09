<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helpers\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$alunoRepository = $entityManager->getRepository(Aluno::class);

$alunoList = $alunoRepository->findAll();

foreach ($alunoList as $aluno) {
    echo "ID: {$aluno->getId()} \nNome: {$aluno->getNome()}\n\n";
}

$ricardo = $alunoRepository->find(1);
echo "Nome: {$ricardo->getNome()}\n\n";

$ana = $alunoRepository->findBy([
    "nome" => "Ana Teresa"
]);

var_dump($ana);

$tatiele = $alunoRepository->findOneBy([
    "nome" => "Tatiele"
]);

var_dump($tatiele);