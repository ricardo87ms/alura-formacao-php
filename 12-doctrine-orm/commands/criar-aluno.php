<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helpers\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$aluno = new Aluno();
$aluno->setNome('Ricardo Moreira Soares');

$entityManager->persist($aluno);
$aluno->setNome("Ricardo Moreira");

$entityManager->flush();


