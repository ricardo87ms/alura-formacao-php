<?php

namespace App\Alura;

class Contato
{
    private $email;
    private $endereco;
    private $cep;

    public function __construct(string $email, string $endereco, string $cep)
    {
        if($this->validaEmail($email)){
            $this->setEmail($email);
        } else {
            $this->setEmail("E-mail inválido");
        }

        $this->endereco = $endereco;
        $this->cep = $cep;
    }

    private function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getContato() : string
    {
        $posicaoArroba = strpos($this->email, "@");

        if($posicaoArroba === false){
            return "Usuário inválido";
        }

        return substr($this->email, 0, $posicaoArroba);
    }

    private function validaEmail(string $email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getEnderecoCep(): string
    {
        $enderecoCep = [$this->endereco, $this->cep];
        return implode(" - ", $enderecoCep);
    }
}