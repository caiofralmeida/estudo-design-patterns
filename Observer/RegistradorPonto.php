<?php

class RegistradorPonto implements Subject
{
    protected $observers = [];

    public function registrar($nome)
    {
        echo "Registrando usuario {$nome}...<br />";
        $registrado = true;
        //logica para identificar registro...
        if ($registrado) {
            echo "registrado com sucesso!<br />";
            $this->notify();
        }
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function attach(Observer $observer)
    {
        $this->observers[] = $observer;
        return $this;
    }
}
