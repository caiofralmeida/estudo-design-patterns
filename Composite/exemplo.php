<?php

namespace Composite;

require __DIR__ . '/../autoload.php';

use Composite\CarrinhoCompras;
use Composite\Escova;
use Composite\CremeDental;

$kit = new CremeDental(new Escova());

$carrinhoCompras = new CarrinhoCompras();
$carrinhoCompras->addProduto($kit);
$carrinhoCompras->addProduto(new FitaDental());
