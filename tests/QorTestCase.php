<?php

use Qool\Gate\Qor;

class QorTestCase extends PHPUnit_Framework_TestCase
{
    public function testTrueConstruction()
    {
        $orGate = new Qor(1, 0);
        $this->assertTrue($orGate->output());
        
        return $orGate;
    }

    /**
     * @depends testTrueConstruction
     */
    public function testFalse($orGate)
    {
        $orGate->set(0, 0);
        $this->assertFalse($orGate->output());

        return $orGate;
    }
}
