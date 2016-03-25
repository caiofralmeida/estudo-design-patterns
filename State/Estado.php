<?php

namespace State;

interface Estado
{
    public function proximo(Pedido $pedido);
}
