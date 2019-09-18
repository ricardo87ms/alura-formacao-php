<?php

namespace App\Alura;

class Contato
{
    private $email;

    public function __construct(string $email)
    {
        $this->email = $email;
    }

    public function getContato()
    {
        $posicaoArroba = strpos($this->email, "@");

        return substr($this->email, 0, $posicaoArroba);
    }
}