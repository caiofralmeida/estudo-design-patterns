<?php

namespace AbstractFactory;

require __DIR__ . '/../autoload.php';

$crmIntegradorUraFactory = new CRMIntegradorURAFactory();

$integradorAssinatura = $crmIntegradorUraFactory->factoryAssinatura();

var_dump($integradorAssinatura);

$integradorVenda = $crmIntegradorUraFactory->factoryAssinatura();

var_dump($integradorVenda);
