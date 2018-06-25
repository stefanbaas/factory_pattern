<?php

namespace App\Classes;

class Car extends Vehicle
{
    public function __construct()
    {
        $this->setBrand('Toyota');
        $this->setWheels(4);
        $this->setSpeed(130);
    }
}