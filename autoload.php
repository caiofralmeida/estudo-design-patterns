<?php

ini_set('display_errors', 1);

function loader($class)
{
    $class = str_replace("\\", "/", $class);
    include __DIR__.'/'.$class . ".php";
}

spl_autoload_register("loader");
