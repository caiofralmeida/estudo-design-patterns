<?php

namespace Observer;

/**
 * @author Caio Almeida <caioamd@hotmail.com>
 */
interface Observer
{
    public function update(Subject $subject);
}
