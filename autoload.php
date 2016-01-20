<?php

ini_set('display_errors', 1);

function loader($class)
{
    require $class . ".php";
}

spl_autoload_register("loader");
