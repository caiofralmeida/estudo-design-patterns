<?php

/**
 * @author Caio Almeida <caioamd@hotmail.com>
 */
class SalvarBancoDados implements Observer
{
    public function update(Subject $subject)
    {
        echo "Salvando no banco de dados...<br />";
        //logica para salvar no banco de dados.
    }
}
