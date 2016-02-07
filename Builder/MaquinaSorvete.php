<?php

/**
 * @author Caio Almeida <caioamd@hotmail.com>
 */
class MaquinaSorvete
{
    protected $sabores = [];

    protected $tipo;

    protected $valor;

    public function __construct(Sabor $saborPrincipal)
    {
        $this->valor = 0;
        $this->adicionarSabor($saborPrincipal);
    }

    public function build()
    {
        return new Sorvete($this->sabores, $this->tipo, $this->valor);
    }

    public function definirTipo(Tipo $tipo)
    {
        $this->tipo = $tipo;
        $this->valor += $tipo->getValor();
    }

    public function adicionarSabor(Sabor $sabor)
    {
        $this->sabores[] = $sabor;
        $this->valor += $sabor->getValor();
        return $this;
    }
}
