<?php require_once 'global.php' ?>
<?php
    $id = $_GET['id'];

    $categoria = new Categoria($id);

    var_dump($categoria);

    $categoria->deletar();

    header('Location: categorias.php');