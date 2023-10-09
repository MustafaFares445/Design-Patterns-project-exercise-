<?php

namespace Creational\AbstractFactory;

class BMWCar implements Carinterface
{

    private int $price;

    public function __construct($price)
    {
        $this->price = $price;
    }

    public function calculatePrice(): int
    {
        return $this->price + 12000;
    }
}