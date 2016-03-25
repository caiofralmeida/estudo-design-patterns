<?php

namespace AbstractFactory\IntegradorURA;

class SistemaInternoVenda implements IntegradorURA
{
    public function integrar()
    {
        echo 'fazendo integracao com a URA';
    }
}
