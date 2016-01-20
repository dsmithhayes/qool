<?php

use Qool\Gate\Qand;

class QandTestCase extends PHPUnit_Framework_TestCase
{
    public function testTrueConstruction()
    {
        $andGate = new Qand(1, 1);
        $this->assertTrue($andGate->output());
    }
}
