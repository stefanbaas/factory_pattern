<?php

namespace App\Classes;

abstract class Vehicle implements \App\Contracts\Vehicle
{
    private $brand;
    private $numWheels;
    private $speed;

    public function setBrand(string $brand)
    {
        $this->brand = $brand;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function setWheels(int $num_wheels)
    {
        $this->numWheels = $num_wheels;
    }

    public function getWheels(): int
    {
        return $this->numWheels;
    }

    public function setSpeed(int $speed)
    {
        $this->speed = $speed;
    }

    public function getSpeed(): int
    {
        return $this->speed;
    }

    public function getData(): string
    {
        $returnData = "Brand: ".$this->brand."<br/>";
        $returnData .= "Speed: ".$this->speed." km/h<br/>";
        $returnData .= "Number of wheels: ".$this->numWheels."<br/>";

        return $returnData;
    }
}