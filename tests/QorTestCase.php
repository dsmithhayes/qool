<?php

use Qool\Gate\Qor;

class QorTestCase extends PHPUnit_Framework_TestCase
{
    public function truthTableProvier()
    {
        return [
            [0, 0, 0],
            [1, 0, 1],
            [0, 1, 1],
            [1, 1, 1],
            [new stdClass(), 0, 1],
            [new stdClass(), new stdClass(), 1],
            [null, null, 0],
            [null, 1, 1],
            [[], [], 0],
            [[1], [], 1],
            [[1], [1], 1]
        ];
    }

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
