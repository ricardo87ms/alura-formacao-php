<?php

namespace classes\funcionarios;

use classes\abstratas\Funcionario;

class Designer extends Funcionario
{
    public function aumentarSalario()
    {
        $this->salario *= 1.3;
    }

    public function getBonificacao()
    {
       return $this->salario * 0.3;
    }
 }
