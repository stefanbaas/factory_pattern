<?php

namespace App\Classes;

class Motorcycle extends Vehicle
{
    public function __construct()
    {
        $this->setBrand('Harley Davidson');
        $this->setWheels(2);
        $this->setSpeed(200);
    }
}