<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$dataBasePath = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $dataBasePath);

$statement = $pdo->query('SELECT * FROM students;');
$studentsDataList = $statement->fetchAll(PDO::FETCH_ASSOC);

$studentsList = [];

foreach ($studentsDataList as $key => $studentData) {
    $studentsList = new Student(
        $studentData['id'],
        $studentData['name'],
        new DateTimeImmutable($studentData['birth_date'])
    );
}

var_dump($studentsList);


// Não compromete o uso de memória
// while ($studentData = $statement->fetch(fetch_style: PDO::FETCH_ASSOC)) {
//     $student = new Student(
//         $studentData['id'],
//         $studentData['name'],
//         new \DateTimeImmutable($studentData['birth_date'])
//     );

//     echo $student->age() . PHP_EOL;
// }
// exit();