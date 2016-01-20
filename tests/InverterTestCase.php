<?php

use Qool\Inverter;

class InverterTestCase extends PHPUnit_Framework_TestCase
{
    public function testTrueInverter()
    {
        $this->assertTrue(Inverter::invert(false));
    }

    public function testFalseInverter()
    {
        $this->assertFalse(Inverter::invert(true));
    }

    public function testNullInverter()
    {
        $this->assertTrue(Inverter::invert(null));
    }

    public function testIntInverter()
    {
        $this->assertFalse(Inverter::invert(1));
    }
}
