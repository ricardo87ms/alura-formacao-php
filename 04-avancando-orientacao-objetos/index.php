<?php

ini_set("display_errors", 1);

require_once "autoload.php";

use classes\funcionarios\Diretor;
use classes\funcionarios\Designer;

$diretor = new Diretor('345.454.545-55', 2000);
$designer = new Designer('345.454.543-55', 4000);

var_dump($diretor);
var_dump($designer);
