<?php

namespace ChainOfResponsability;

require __DIR__. '/../autoload.php';

$minimoCaracteres = new MinimoCaracteres();
$caracteresEspeciais = new CaracteresEspeciais();
$numeros = new Numeros();

$minimoCaracteres->proximoValidador($caracteresEspeciais);
$caracteresEspeciais->proximoValidador($numeros);

 // true - sucesso em todos
var_dump($minimoCaracteres->verificar('c@ioalme1da'));

// false - falha em MinimoCaracteres
var_dump($minimoCaracteres->verificar('c@1o'));

// false - falha em CaracteresEspeciais
var_dump($minimoCaracteres->verificar('caio12345'));

// false - falha em Numeros
var_dump($minimoCaracteres->verificar('c@ioalmeida'));
