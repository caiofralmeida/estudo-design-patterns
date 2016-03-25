<?php

namespace FactoryMethod;

class UsuarioMapper extends AbstractMapper
{
    public function findById($id)
    {
        echo 'buscando pelo id ' . $id;
    }
}
