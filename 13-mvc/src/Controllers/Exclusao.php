<?php

namespace Alura\Cursos\Controllers;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;

class Exclusao implements InterfaceControladorRequisicao
{
    /**
     * @var \Doctrine\ORM\EntityManagerInterface
     */
    private $entityManager;

    public function __construct()
    {
        $this->entityManager = (new EntityManagerCreator())->getEntityManager();
    }

    public function processaRequisicao(): void
    {
        $id = filter_input(
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT
        );

        if (is_null($id) || $id === false) {
            $_SESSION['tipo_mensagem'] = 'danger';
            $_SESSION['mensagem'] = 'Este curso não existe';
            header('Location: /login');
            return;
        }

        $curso = $this->entityManager->getReference(Curso::class, $id);

        $this->entityManager->remove($curso);
        $this->entityManager->flush();

        $_SESSION['tipo_mensagem'] = 'success';
        $_SESSION['mensagem'] = 'O curso foi excluído com sucesso!!';

        header('Location: /listar-cursos');
    }
}
