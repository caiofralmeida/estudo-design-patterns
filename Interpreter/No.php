<?php

namespace Interpreter;

class No
{
    private $nome;

    private $noFilho;

    public function __construct($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNo(No $no)
    {
        $this->noFilho = $no;
        return $this;
    }

    public function getNo()
    {
        return $this->noFilho;
    }
}
