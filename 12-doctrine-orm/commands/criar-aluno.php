<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helpers\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$aluno = new Aluno();
$aluno->setNome($argv[1]);

$entityManager->persist($aluno);
$entityManager->flush();


