<?php

namespace Tests;

use Creational\ProtoType\AutomaticCarProtoType;
use Creational\ProtoType\ManualCarProtoType;
use PHPUnit\Framework\TestCase;

class ProtoTypeTest extends TestCase
{
    public function test_can_create_Autotmatic_Car_with_clone()
    {
        $automaticProtoType = new AutomaticCarProtoType();

        for ($i = 0 ; $i <= 10 ; $i++ ){
            $newCar = clone $automaticProtoType;
            $this->assertInstanceOf(AutomaticCarProtoType::class , $newCar);
        }
    }

    public function test_can_create_Manual_Car_with_clone()
    {
        $manualProtoType = new ManualCarProtoType();

        for ($i = 0 ; $i <= 10 ; $i++ ){
            $newCar = clone $manualProtoType;
            $this->assertInstanceOf(ManualCarProtoType::class , $newCar);
        }
    }

}