<?php

interface Subject
{
    public function notify();
    
    public function attach(Observer $observer);
}
