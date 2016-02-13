<?php

class Telefone
{
    protected $ddd;

    protected $numero;

    public function getDdd()
    {
        return $this->ddd;
    }

    public function setDdd($ddd)
    {
        $this->ddd = $ddd;
        return $this;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
        return $this;
    }

    public function __toString()
    {
        return sprintf('(%s) %s', $this->ddd, $this->numero);
    }
}
