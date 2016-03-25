<?php

namespace Observer;

require __DIR__ . '/../autoload.php';

$registrador = new RegistradorPonto();

$registrador->attach(new SalvarBancoDados());
$registrador->attach(new ImprimirComprovante());

$registrador->registrar("Jamal");
