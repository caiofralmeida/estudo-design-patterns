<?php

ini_set('display_errors', 1);

function loader($class)
{
    require $class . ".php";
}

spl_autoload_register("loader");

$registrador = new RegistradorPonto();

$registrador->attach(new SalvarBancoDados());
$registrador->attach(new ImprimirComprovante());

$registrador->registrar("Jamal");
