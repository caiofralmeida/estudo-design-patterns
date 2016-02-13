<?php

class TelefoneFactory
{
    public static function factory($ddd, $numero)
    {
        return (new Telefone())
            ->setNumero($numero)
            ->setDdd($ddd);
    }
}
