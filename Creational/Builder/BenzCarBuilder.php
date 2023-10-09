<?php

namespace Creational\Builder;

use Creational\Builder\Models\BenzCar;
use Creational\Builder\Models\Car;

class BenzCarBuilder implements CarBuilderInterface
{

    private Car $type;
    public function createCar()
    {
        $this->type = new BenzCar();
    }

    public function addEngine()
    {
        $this->type->setPart("Engine" , "engine");
    }

    public function addDoors()
    {
        $this->type->setPart("Door" , "doors");
    }

    public function addBody()
    {
        $this->type->setPart("Body" , "body");
    }

    public function addWheel()
    {
        $this->type->setPart("wheel" , "wheels");
    }

    public function getCar(): Car
    {
        return $this->type;
    }
}