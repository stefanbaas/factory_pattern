<?php

namespace App\Contracts;

use phpDocumentor\Reflection\Types\Integer;

interface Vehicle
{
    public function setBrand(string $brand);
    public function getBrand() : string;
    public function setWheels(int $num_wheels);
    public function getWheels() : int;
    public function setSpeed(int $speed);
    public function getSpeed() : int;
    public function getData() : string;
}