<?php

/**
 * @author Caio Almeida <caioamd@hotmail.com>
 */
class Sorvete implements Cobravel
{
    private $sabores = [];
    private $tipo;
    private $valor;

    public function __construct(array $sabores, Tipo $tipo, $valor)
    {
        $this->sabores = $sabores;
        $this->tipo = $tipo;
        $this->valor = $valor;
    }

    public function getSabores()
    {
        return $this->sabores;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function getValor()
    {
        return $this->valor;
    }
}
