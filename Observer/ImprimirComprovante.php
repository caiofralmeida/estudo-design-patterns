<?php

class ImprimirComprovante implements Observer
{
    public function update(Subject $subject)
    {
        echo "Imprimindo comprovante...<br />";
        //logica para imprimir comprovante
    }
}
