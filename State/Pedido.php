<?php

namespace State;

class Pedido
{
    protected $valor;

    protected $estado;

    public function __construct($valor)
    {
        $this->valor  = $valor;
        $this->estado = new EmAprovacao();
    }

    public function proximoEstado()
    {
        $this->estado->proximo($this);
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado(Estado $estado)
    {
        $this->estado = $estado;
    }
}
