<?php

class PagamentoLote extends Pagamento
{
    protected function enviarPagamento()
    {
        echo "enviando pagamento por lote..<br />";
    }
}
