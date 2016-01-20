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

    public function testOneIntInverter()
    {
        $this->assertFalse(Inverter::invert(1));
    }

    /**
     * Note that -1 negated is still true.
     */
    public function testNegativeInt()
    {
        $this->assertFalse(Inverter::invert(-1));
    }

    public function testFloatInverter()
    {
        $this->assertFalse(Inverter::invert(0.1));
    }
}
