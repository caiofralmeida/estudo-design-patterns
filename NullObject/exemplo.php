<?php

namespace NullObject;

require __DIR__ . '/../autoload.php';

class Exemplo
{
    public function calcularImposto(Conta $conta)
    {
        return $conta->getValor() * 0.2;
    }
}

$exemplo = new Exemplo();

$conta = new Conta();
$contaVazia = new ContaVazia();

var_dump($exemplo->calcularImposto($conta));
var_dump($exemplo->calcularImposto($contaVazia));
