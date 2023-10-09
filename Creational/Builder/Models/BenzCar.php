<?php

namespace Creational\Builder\Models;

class BenzCar extends Car
{
    private $data = [];
    public function setPart($name , $value): void
    {
        $this->data[$name] = $value;
    }
}