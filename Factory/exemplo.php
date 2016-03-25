<?php

namespace Factory;

require __DIR__ . '/../autoload.php';

$telefone = TelefoneFactory::factory(11, '98402-3045');
echo $telefone;
