<?php

namespace Creational\AbstractFactory;

class BenzCar implements  Carinterface
{

    private int $price;
    private int $tax;

    public function __construct($price , $tax)
    {
        $this->price = $price;
        $this->tax = $tax;
    }

    public function calculatePrice(): int
    {
        return $this->tax + $this->price;
    }
}