<?php

use Qool\Gate\Qand;

class QandTestCase extends PHPUnit_Framework_TestCase
{
    public function testTrueConstruction()
    {
        $andGate = new Qand(1, 1);
        $this->assertTrue($andGate->output());

        return $andGate;
    }

    /**
     * @depends testTrueConstruction
     */
    public function testFalse($andGate)
    {
        $andGate->set(1, 0);
        $this->assertFalse($andGate->output());

        return $andGate;
    }

    /**
     * @depends testFalse
     */
    public function testTrueObjects($andGate)
    {
        $andGate->set(new stdClass(), new stdClass());
        $this->assertTrue($andGate->output());

        return $andGate;
    }

    /**
     * @depends testTrueObjects
     */
    public function testEmptyArrays($andGate)
    {
        $andGate->set([], []);
        $this->assertFalse($andGate->output());

        return $andGate;
    }

    /**
     * @depends testEmptyArrays
     */
    public function testHalfEmptyArrays($andGate)
    {
        $andGate->set([], [1]);
        $this->assertFalse($andGate->output());

        return $andGate;
    }

    /**
     * @depends testHalfEmptyArrays
     */
    public function testArrays($andGate)
    {
        $andGate->set([1], [2]);
        $this->assertTrue($andGate->output());
    }
}
