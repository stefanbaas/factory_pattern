<?php

namespace Tests;

use App\Classes\Vehicle;
use PHPUnit\Framework\TestCase;

class VehicleDouble extends Vehicle {

}

class VehicleTest extends TestCase
{
    private $sut;

    protected function setUp() /* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUp();
        $this->sut = new VehicleDouble();
    }

    public function testInstantiation () : void
    {
        $this->assertNotNull($this->sut);
    }

    public function testSetBrand () : void
    {
        $this->sut->setBrand('Toyota');
        $this->assertEquals('Toyota', $this->sut->getBrand());

        $this->sut->setBrand('Ford');
        $this->assertEquals('Ford', $this->sut->getBrand());
    }

    public function testSetWheels () : void
    {
        $this->sut->setWheels(4);
        $this->assertEquals(4, $this->sut->getWheels());

        $this->sut->setWheels(2);
        $this->assertEquals(2, $this->sut->getWheels());
    }

    public function testSetSpeed () : void
    {
        $this->sut->setSpeed(120);
        $this->assertEquals(120, $this->sut->getSpeed());

        $this->sut->setSpeed(200);
        $this->assertEquals(200, $this->sut->getSpeed());
    }

    public function testGetData ()
    {
        $this->assertTrue(is_string($this->sut->getData()));
    }
}
