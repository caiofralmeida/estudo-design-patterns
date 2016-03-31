<?php

namespace Composite;

class CarrinhoCompras
{
    private $valorTotal;
    private $produtos = [];

    public function addProduto(Produto $produto)
    {
        $this->produtos[] = $produto;
        $this->valorTotal += $produto->getValor();

        return $this;
    }

    public function getValorTotal()
    {
        return $this->valorTotal;
    }
}
