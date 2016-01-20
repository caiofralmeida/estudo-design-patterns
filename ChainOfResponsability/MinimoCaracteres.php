<?php

class MinimoCaracteres extends SenhaForteChain
{
    const MINIMO = 8;

    public function isValido($senha)
    {
        return strlen($senha) >= self::MINIMO;
    }
}
