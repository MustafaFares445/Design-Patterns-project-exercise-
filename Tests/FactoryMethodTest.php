<?php

namespace Tests;

use Creational\FactoryMethod\BMWBrand;
use Creational\FactoryMethod\BMWBrandFactory;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function test_can_build_BMWBrand()
    {
        $brandFactory = new BMWBrandFactory();
        $myBrand = $brandFactory->BuildBrand();

        $this->assertInstanceOf(BMWBrand::class , $myBrand);
        $this->assertStringContainsString($myBrand->createBrand() , 'BMWBrand');

    }
}