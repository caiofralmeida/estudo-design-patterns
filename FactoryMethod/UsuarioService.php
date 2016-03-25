<?php

namespace FactoryMethod;

class UsuarioService extends AbstractService
{
    public function getMapper()
    {
        return new UsuarioMapper();
    }
}
