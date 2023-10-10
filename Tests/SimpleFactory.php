<?php

namespace Tests;

use Creational\SimpleFactory\Car;
use Creational\SimpleFactory\CarFactory;
use PHPUnit\Framework\TestCase;

class SimpleFactory extends TestCase
{
    public function test_can_create_car()
    {
        $factory = new CarFactory();
        $BMWCar = $factory->createCar("BMW");

        $this->assertInstanceOf(Car::class , $BMWCar);
    }

}