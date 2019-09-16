<?php

class Validacao {

    public static function protegeAtributo($atributo)
    {
        if($atributo == "titular" || $atributo == "saldo" ){
            throw new Exception("O atributo $atributo é privado");
        }
    }

    public static function verificaNumerico($valor)
    {
        if(!is_numeric($valor)){
            throw new InvalidArgumentException("O valor passado na variável não é um valor numerico");
        }
    }
}