<?php

namespace Tests;

use App\Classes\Vehicle;
use App\Factories\VehicleFactory;
use PHPUnit\Framework\TestCase;

class VehicleTestDouble extends Vehicle {

}

class VehicleFactoryDouble extends VehicleFactory {
    public function make()
    {
        return new VehicleTestDouble();
    }
}

class VehicleFactoryTest extends TestCase
{
    private $sut;

    protected function setUp() /* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUp();
        $this->sut = new VehicleFactoryDouble();
    }

    public function testInstantiation () : void
    {
        $this->assertNotNull($this->sut);
    }

    public function testInstanceOf () : void
    {
        $this->assertInstanceOf(VehicleFactory::class, $this->sut);
    }

    public function testMake()
    {
        $this->assertInstanceOf(Vehicle::class, $this->sut->make());
    }
}
