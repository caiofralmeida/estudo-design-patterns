<?php

/**
 * @author Caio Almeida <caioamd@hotmail.com>
 */
interface Subject
{
    public function notify();

    public function attach(Observer $observer);
}
