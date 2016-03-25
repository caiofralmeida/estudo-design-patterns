<?php

namespace FactoryMethod;

abstract class AbstractMapper
{
    public abstract function findById($id);

    public function save(\Stdclass $data)
    {
        echo 'salvando dados...';
    }
}
