<?php

abstract class Pagamento
{
    public function efetivar()
    {
        $this->calcularJuros();
        $this->enviarPagamento();
        $this->salvarRetorno();
    }

    public function calcularJuros()
    {
        echo "calculando juros...<br />";
    }

    public function salvarRetorno()
    {
        echo "salvando dados de retorno em uma base<br />";
    }

    protected abstract function enviarPagamento();
}
