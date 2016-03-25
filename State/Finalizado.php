<?php

namespace State;

class Finalizado implements Estado
{
    public function proximo(Pedido $pedido)
    {
        throw new Exception('Não é mais possivel mudar de estado.');
    }
}
