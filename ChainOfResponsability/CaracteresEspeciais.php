<?php

namespace ChainOfResponsability;

/**
 * @author Caio Almeida <caioamd@hotmail.com>
 */
class CaracteresEspeciais extends SenhaForteChain
{
    public function isValido($senha)
    {
        return preg_match("/[!@#$*()]/i", $senha);
    }
}
