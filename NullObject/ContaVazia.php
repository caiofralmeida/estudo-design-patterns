<?php

namespace NullObject;

class ContaVazia extends Conta
{
    public function getValor()
    {
        return 0;
    }

    public function getRendimento()
    {
        return 0;
    }
}
