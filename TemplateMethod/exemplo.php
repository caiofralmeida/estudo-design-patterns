<?php

namespace TemplateMethod;

require __DIR__ . '/../autoload.php';

$pagamentoOnline = new PagamentoOnline();
$pagamentoOnline->efetivar();

echo "============== <br />";

$pagamentoOnline = new PagamentoLote();
$pagamentoOnline->efetivar();
