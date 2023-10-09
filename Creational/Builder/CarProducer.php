<?php

namespace Creational\Builder;

class CarProducer
{
    private CarBuilderInterface $builder;

    public function __construct(CarBuilderInterface $builder)
    {
        $this->builder = $builder;
    }

    public function ProducerCar()
    {
        $this->builder->createCar();
        $this->builder->addBody();
        $this->builder->addDoors();
        $this->builder->addEngine();
        $this->builder->addWheel();

       return  $this->builder->getCar();
    }
}