<?php

namespace Tests;

use App\Classes\Car;
use App\Classes\Vehicle;
use PHPUnit\Framework\TestCase;

class CarTest extends TestCase
{
    private $sut;

    protected function setUp() /* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUp();
        $this->sut = new Car();
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
