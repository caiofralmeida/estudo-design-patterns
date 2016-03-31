<?php

namespace Composite;

abstract class KitProduto extends Produto
{
    private $produto;

    public function __construct(Produto $produto = null)
    {
        $this->produto = $produto;
    }

    public function getValor()
    {
        if ($this->produto === null) {
            return $this->valor;
        }

        return $this->valor + $this->produto->getValor();
    }
}
