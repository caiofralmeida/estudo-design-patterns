<?php

require __DIR__ . '/../autoload.php';

$vagaComum = new VagaComum('Desenvolvedor de sistemas', 'desenvolver sistemas web');
$vagaPcd = new VagaPcd($vagaComum);

echo $vagaComum->getTitulo();
echo "<br />";
echo $vagaPcd->getTitulo();
