<?php

namespace Tests;

use Creational\Builder\BenzCarBuilder;
use Creational\Builder\BMWCartBuilder;
use Creational\Builder\CarProducer;
use Creational\Builder\Models\BenzCar;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    public function test_produce_BenzCar()
    {
        $BenzBuilder = new BenzCarBuilder();
        $carProducer = new CarProducer($BenzBuilder);
        $myCar = $carProducer->ProducerCar();

        $this->assertInstanceOf(BenzCar::class , $myCar);

    }

}