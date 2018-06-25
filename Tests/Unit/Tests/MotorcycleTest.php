<?php

namespace Tests;

use App\Classes\Motorcycle;
use App\Classes\Vehicle;
use PHPUnit\Framework\TestCase;

class MotorcycleTest extends TestCase
{
    private $sut;

    protected function setUp() /* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUp();
        $this->sut = new Motorcycle();
    }

    public function testInstantiation () : void
    {
        $this->assertNotNull($this->sut);
    }

    public function testInstanceOf () : void
    {
        $this->assertInstanceOf(Vehicle::class, $this->sut);
    }
}
