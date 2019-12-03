<?php require_once 'global.php'; ?>
<?php
    $id = $_POST['id'];
    $nome = $_POST['nome'];

    $categoria = new Categoria($id);
    $categoria->nome = $nome;

    $categoria->alterar();

    header('Location: categorias.php');