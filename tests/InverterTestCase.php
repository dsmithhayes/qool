<?php

use Qool\Inverter;

class InverterTestCase extends PHPUnit_Framework_TestCase
{
    public function testTrue()
    {
        $this->assertTrue(Inverter::invert(false));
    }

    public function testFalse()
    {
        $this->assertFalse(Inverter::invert(true));
    }

    public function testNull()
    {
        $this->assertTrue(Inverter::invert(null));
    }

    public function testOneInt()
    {
        $this->assertFalse(Inverter::invert(1));
    }

    public function testZeroInt()
    {
        $this->assertTrue(Inverter::invert(0));
    }

    /**
     * Note that -1 negated is still false.
     */
    public function testNegativeInt()
    {
        $this->assertFalse(Inverter::invert(-1));
    }

    /**
     * Negated floats are false, also!
     */
    public function testFloat()
    {
        $this->assertFalse(Inverter::invert(0.1));
    }

    public function testArray()
    {
        $this->assertTrue(Inverter::invert([]));
    }

    /**
     * Negated objects are always false!
     */
    public function testObject()
    {
        $this->assertFalse(Inverter::invert(new stdClass()));
    }
}
