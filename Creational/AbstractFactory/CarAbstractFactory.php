<?php

namespace Creational\AbstractFactory;

class CarAbstractFactory
{
    private $tax =10000;
    private $price;

    public function __construct($price)
    {
        $this->price = $price;
    }

    public function CreateBMWCare(): BMWCar
    {
        return new BMWCar($this->price);
    }
    public function CreateBenzCar(): BenzCar
    {
        return new BenzCar($this->price , $this->tax);
    }

}