<?php

namespace App\Factories;

use App\Classes\Motorcycle;

class MotorcycleFactory extends VehicleFactory
{
    public function make()
    {
        return new Motorcycle();
    }
}