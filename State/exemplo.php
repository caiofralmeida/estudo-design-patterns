<?php

ini_set('display_errors', 1);

function loader($class)
{
    require $class . ".php";
}

spl_autoload_register("loader");

$pedido = new Pedido(560.70);

echo "<pre>";
var_dump($pedido);
$pedido->proximoEstado();
var_dump($pedido);
$pedido->proximoEstado();
var_dump($pedido);
