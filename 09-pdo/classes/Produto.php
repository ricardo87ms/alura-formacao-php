<?php

require_once 'global.php';

class Produto
{
    public $id;
    public $nome;
    public $preco;
    public $quantidade;
    public $categoria;

    public static function listar()
    {
        $query = 'SELECT p.id,
                        p.nome,
                        p.preco,
                        p.quantidade,
                        p.categoria_id,
                        c.nome as categoria_nome
                        FROM produtos p
                        JOIN categorias c on (c.id = p.categoria_id)
                        ORDER BY p.nome
                        ';
        $conexao = Conexao::pegarConexao();
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function inserir()
    {
        $query = "INSERT INTO produtos (nome, preco, quantidade, categoria_id)
                        VALUES ('" . $this->nome . "', " . $this->preco . ", " . $this->quantidade . ", " . $this->categoria_id . ")";
        $conexao = Conexao::pegarConexao();
        $conexao->exec($query);
    }
}
