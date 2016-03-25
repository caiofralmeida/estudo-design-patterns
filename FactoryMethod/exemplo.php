<?php

namespace FactoryMethod;

require __DIR__ . '/../autoload.php';

$service = new UsuarioService();

$service->getById(123);
echo '<br />';
$service->save(new \stdclass());
