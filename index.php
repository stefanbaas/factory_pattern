<?php
require_once("vendor/autoload.php");

// Car
$carFactory = new \App\Factories\CarFactory();
$car = $carFactory->make();
echo "<b>New car</b><br/>";
echo $car->getData()."<br/>";

// Car speed
echo "The current speed is ".$car->getSpeed()." km/h<br/>";
$car->setSpeed(80);
echo "The current speed is ".$car->getSpeed()." km/h<br/>";
echo "<br/>";

// Motorcycle
$motorcycleFactory = new \App\Factories\MotorcycleFactory();
$motorcycle = $motorcycleFactory->make();
echo "<b>New motorcycle</b><br/>";
echo $motorcycle->getData()."<br/>";

// Motorcycle speed
echo "The current speed is ".$motorcycle->getSpeed()." km/h<br/>";
$motorcycle->setSpeed(120);
echo "The current speed is ".$motorcycle->getSpeed()." km/h<br/>";
echo "<br/>";
