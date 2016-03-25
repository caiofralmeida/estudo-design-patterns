<?php

namespace ChainOfResponsability;

require __DIR__. '/../autoload.php';

$senhaForte = new MinimoCaracteres();
$senhaForte->proximoValidador(new CaracteresEspeciais());
$senhaForte->proximoValidador(new Numeros());

var_dump($senhaForte->verificar('c@ioalme1da'));
