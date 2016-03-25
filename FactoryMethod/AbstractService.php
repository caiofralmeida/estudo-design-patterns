<?php

namespace FactoryMethod;

abstract class AbstractService
{
    public function getById($id)
    {
        return $this->getMapper()->findById($id);
    }

    public function save(\StdClass $data)
    {
        return $this->getMapper()->save($data);
    }

    /**
     * @return AbstractMapper
     */
    protected abstract function getMapper();
}
