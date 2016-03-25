<?php

namespace State;

require __DIR__ . '/../autoload.php';

$pedido = new Pedido(560.70);

echo "<pre>";
var_dump($pedido);
$pedido->proximoEstado();
var_dump($pedido);
$pedido->proximoEstado();
var_dump($pedido);
