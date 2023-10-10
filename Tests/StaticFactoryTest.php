<?php

namespace Tests;

use Creational\SimpleFactory\Car;
use Creational\StaticFactory\BenzCar;
use Creational\StaticFactory\BMWCar;
use PHPUnit\Framework\TestCase;
use Creational\StaticFactory\StaticFactory;
class StaticFactoryTest extends TestCase
{
    public function test_can_create_BMW_Car()
    {
        $this->assertInstanceOf(BMWCar::class , StaticFactory::factory('BMW'));
    }

    public function test_can_create_Benz_Car()
    {
        $this->assertInstanceOf(BenzCar::class , StaticFactory::factory('Benz'));
    }
}