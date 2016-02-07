<?php

/**
 * @author Caio Almeida <caioamd@hotmail.com>
 */
abstract class SenhaForteChain
{
    protected $proximo;

    public function verificar($senha)
    {
        if (!$this->isValido($senha)) {
            return false;
        }

        if ($this->proximo instanceof SenhaForteChain) {
            return $this->proximo->verificar($senha);
        }

        return true;
    }

    public function proximoValidador(SenhaForteChain $validador)
    {
        $this->proximo = $validador;
        return $this;
    }

    public abstract function isValido($senha);
}
