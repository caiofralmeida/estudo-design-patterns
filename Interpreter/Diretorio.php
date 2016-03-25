<?php

namespace Interpreter;

use Interpreter;

class Diretorio
{
    private $noRaiz;

    public function __construct($nome)
    {
        $this->noRaiz = new No($nome);
    }

    public function novoDiretorio($nome)
    {
        if ($this->noRaiz->getNo() == null) {
            $this->noRaiz->setNo(new No($nome));
        } else {
            $this->noRaiz->getNo()->setNo(new No($nome));
        }
    }
}
