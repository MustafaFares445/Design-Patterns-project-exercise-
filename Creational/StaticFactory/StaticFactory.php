<?php

namespace Creational\StaticFactory;

class StaticFactory
{
    public static function factory(string $type): BMWCar|BenzCar|null
    {
          if ($type == 'BMW'){
              return new BMWCar();
          } else if ($type == 'Benz'){
              return new BenzCar();
          }

          return null;
    }
}