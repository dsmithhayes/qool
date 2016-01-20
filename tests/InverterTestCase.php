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

    /**
     * I feel this this should make sense, an empty array should be false.
     */
    public function testEmptyArray()
    {
        $this->assertTrue(Inverter::invert([]));
    }

    /**
     * Tests an array with a value in it, should return false when negated
     */
    public function testArray()
    {
        $this->assertFalse(Inverter::invert([1]));
    }

    /**
     * Negated objects are always false! This means that objects are true in
     * nature. I guess that's right, even if they are empty...
     */
    public function testObject()
    {
        $this->assertFalse(Inverter::invert(new stdClass()));
    }
}
