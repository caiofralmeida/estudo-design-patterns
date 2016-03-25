<?php

require __DIR__ . '/../autoload.php';

use Interpreter\Diretorio;

$diretorio = new Diretorio('Jamal');
$diretorio->novoDiretorio('jamal2');
$diretorio->novoDiretorio('jamal3');
$diretorio->novoDiretorio('jamal4');

echo '<pre>';
print_r($diretorio);
