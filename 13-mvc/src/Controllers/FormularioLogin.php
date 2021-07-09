<?php

namespace Alura\Cursos\Controllers;

class FormularioLogin extends ControllerComHtml implements InterfaceControladorRequisicao
{
    public function processaRequisicao(): void
    {
        echo $this->renderizaHtml('login/Formulario.php', [
            'titulo' => 'Login'
        ]);
    }
}
