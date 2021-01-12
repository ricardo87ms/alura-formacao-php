<?php

use Alura\Cursos\Controllers\FormularioInsercao;
use Alura\Cursos\Controllers\ListarCursos;

require '../vendor/autoload.php';

switch ($_SERVER['PATH_INFO']) {
    case '/listar-cursos':
        $controlador = new ListarCursos();
        $controlador->processaRequisicao();
        break;
    case '/novo-curso':
        $controlador = new FormularioInsercao();
        $controlador->processaRequisicao();
        break;
    default:
        echo "Erro 404";
        break;
}
