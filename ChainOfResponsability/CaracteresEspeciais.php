<?php

class CaracteresEspeciais extends SenhaForteChain
{
    public function isValido($senha)
    {
        return preg_match("/[!@#$*()]/i", $senha);
    }
}
