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
    }
}
