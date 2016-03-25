<?php

namespace ChainOfResponsability;

/**
 * @author Caio Almeida <caioamd@hotmail.com>
 */
class MinimoCaracteres extends SenhaForteChain
{
    const MINIMO = 8;

    public function isValido($senha)
    {
        return strlen($senha) >= self::MINIMO;
    }
}
