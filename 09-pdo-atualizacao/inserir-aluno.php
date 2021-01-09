<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$dataBasePath = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $dataBasePath);

$student = new Student(null, 'Ricardo 3423', new DateTime('1987-10-20'));

// $sqlInsert = "INSERT INTO students (name, birth_date) VALUES (?, ?);";
// $statement = $pdo->prepare($sqlInsert);
// $statement->bindValue(1, $student->name());
// $statement->bindValue(2, $student->birthDate()->format('Y-m-d'));

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES (:name, :birth_date);";
$statement = $pdo->prepare($sqlInsert);
$statement->bindValue(':name', $student->name());
$statement->bindValue(':birth_date', $student->birthDate()->format('Y-m-d'));

if ($statement->execute()) {
    echo 'Usuário Incluído';
}
