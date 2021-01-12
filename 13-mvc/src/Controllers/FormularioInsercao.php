<?php

namespace Alura\Cursos\Controllers;

class FormularioInsercao implements InterfaceControladorRequisicao
{
    public function processaRequisicao(): void
    {
        require __DIR__ . '../../../view/cursos/FormularioInsercao.php';
    }
}
