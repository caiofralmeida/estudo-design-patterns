<?php

/**
 * @author Caio Almeida <caioamd@hotmail.com>
 */
class Numeros extends SenhaForteChain
{
    public function isValido($senha)
    {
        return preg_match("/[0-9]+/i", $senha);
    }
}
