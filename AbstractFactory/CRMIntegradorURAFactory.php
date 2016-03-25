<?php

namespace AbstractFactory;

class CRMIntegradorURAFactory extends AbstractIntegradorURAFactory
{
    public function factoryAssinatura()
    {
        return new IntegradorURA\CRMAssinatura();
    }

    public function factoryVenda()
    {
        return new IntegradorURA\CRMVenda();
    }
}
