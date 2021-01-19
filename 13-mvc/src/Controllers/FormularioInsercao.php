<?php

namespace Alura\Cursos\Controllers;

class FormularioInsercao extends ControllerComHtml implements InterfaceControladorRequisicao
{
    public function processaRequisicao(): void
    {
        echo $this->renderizaHtml('cursos/Formulario.php', [
            'titulo' => 'Novo curso'
        ]);
    }
}
