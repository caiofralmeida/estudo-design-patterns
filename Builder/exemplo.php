<?php

namespace Builder;

require __DIR__ . '/../autoload.php';

$maquinaSorvete = new MaquinaSorvete(new Flocos());

$maquinaSorvete->definirTipo(new Cestinha());
$maquinaSorvete->adicionarSabor(new Morango());

$sorvete = $maquinaSorvete->build();

echo "<pre>";
var_dump($sorvete);
