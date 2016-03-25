<?php

namespace Decorator;

/**
 * @author Caio Almeida <caioamd@hotmail.com>
 */
class VagaComum implements Vaga
{
    protected $titulo;
    protected $descricao;

    public function __construct($titulo, $descricao)
    {
        $this->titulo    = $titulo;
        $this->descricao = $descricao;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }
}
