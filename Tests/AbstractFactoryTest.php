<?php

namespace Tests;

use Creational\AbstractFactory\BenzCar;
use Creational\AbstractFactory\BMWCar;
use Creational\AbstractFactory\CarAbstractFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{

        public function test_can_create_BMWCar()
        {
            $carFactory = new CarAbstractFactory(20000);

            $myCar = $carFactory->CreateBMWCare();

            $this->assertInstanceOf(BMWCar::class , $myCar);
        }

        public function test_can_create_BenzCar()
        {
            $carFactory = new CarAbstractFactory(10000);

            $myCar = $carFactory->CreateBenzCar();

            $this->assertInstanceOf(BenzCar::class , $myCar);
        }
}