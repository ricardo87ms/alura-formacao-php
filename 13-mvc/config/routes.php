<?php

use Alura\Cursos\Controllers\Exclusao;
use Alura\Cursos\Controllers\FormularioEdicao;
use Alura\Cursos\Controllers\FormularioInsercao;
use Alura\Cursos\Controllers\ListarCursos;
use Alura\Cursos\Controllers\Persistencia;

return [
    '/listar-cursos' => ListarCursos::class,
    '/novo-curso' => FormularioInsercao::class,
    '/salvar-curso' => Persistencia::class,
    '/excluir-curso' => Exclusao::class,
    '/alterar-curso' => FormularioEdicao::class
];
