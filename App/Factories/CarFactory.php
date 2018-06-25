<?php

namespace App\Factories;

use App\Classes\Car;

class CarFactory extends VehicleFactory
{
    public function make()
    {
        return new Car();
    }
}