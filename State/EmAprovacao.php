<?php

namespace State;

class EmAprovacao implements Estado
{
    public function proximo(Pedido $pedido)
    {
        $pedido->setEstado(new Aprovado());
    }
}
