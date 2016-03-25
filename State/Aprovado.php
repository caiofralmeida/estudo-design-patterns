<?php

namespace State;

class Aprovado implements Estado
{
    public function proximo(Pedido $pedido)
    {
        $pedido->setEstado(new Finalizado());
    }
}
