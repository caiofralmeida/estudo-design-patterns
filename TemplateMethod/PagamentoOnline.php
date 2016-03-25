<?php

namespace TemplateMethod;

class PagamentoOnline extends Pagamento
{
    protected function enviarPagamento()
    {
        echo "enviando pagamento online..<br />";
    }
}
