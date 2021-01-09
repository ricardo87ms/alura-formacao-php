<?php

require_once 'vendor/autoload.php';

$dataBasePath = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $dataBasePath);

$statement = $pdo->prepare("DELETE FROM students WHERE id = ?");
$statement->bindValue(1, 3, PDO::PARAM_INT);

var_dump($statement->execute());

// $statement->bindValue(1, 4, PDO::PARAM_INT);
// var_dump($statement->execute());