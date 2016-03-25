<?php

namespace Decorator;

/**
 * @author Caio Almeida <caioamd@hotmail.com>
 */
class VagaPcd implements Vaga
{
    protected $vaga;

    public function __construct(Vaga $vaga)
    {
        $this->vaga = $vaga;
    }

    public function getTitulo()
    {
        return sprintf('%s (Pcd)', $this->vaga->getTitulo());
    }

    public function getDescricao()
    {
        return $this->vaga->getDescricao();
    }
}
