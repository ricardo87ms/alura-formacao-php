<?php require_once 'classes/Categoria.php' ?>
<?php
    $id = $_GET['id'];

    $categoria = new Categoria($id);

    $categoria->deletar();

    header('Location: categorias.php');