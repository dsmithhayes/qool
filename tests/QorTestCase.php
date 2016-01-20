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
}
