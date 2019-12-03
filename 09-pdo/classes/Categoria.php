<?php

require_once 'Conexao.php';

class Categoria
{
    public $id;
    public $nome;

    public function __construct($id = null)
    {
        if($id){
            $this->id = $id;
            $this->carregar();
        }
    }

    public function listar()
    {
        $query = "SELECT id, nome FROM categorias";
        $conexao = Conexao::pegarConexao();
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function inserir()
    {
        $query = "INSERT INTO categorias (nome) VALUES ('" . $this->nome . "')";
        $conexao = Conexao::pegarConexao();
        return $conexao->exec($query);
    }

    public function carregar()
    {
        $query = "SELECT id, nome FROM categorias WHERE id = " . $this->id;
        $conexao = Conexao::pegarConexao();
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        foreach ($lista as $linha) {
            $this->nome = $linha['nome'];
        }
    }

    public function alterar()
    {
        $query = "UPDATE categorias SET nome = ('" . $this->nome . "') WHERE id = ('" . $this->id . "')";
        $conexao = Conexao::pegarConexao();
        return $conexao->exec($query);
    }

    public function deletar()
    {
        $query = "DELETE FROM categorias WHERE id = ('" . $this->id . "')";
        $conexao = Conexao::pegarConexao();
        return $conexao->exec($query);
    }
}
