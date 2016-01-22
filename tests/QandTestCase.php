<?php

use Qool\Gate\Qand;

class QandTestCase extends PHPUnit_Framework_TestCase
{
    public function truthTableProvider()
    {
        return [
            [0, 0, 0],
            [1, 0, 0],
            [0, 1, 0],
            [1, 1, 1],
            [new stdClass(), new stdClass(), 1],
            [null, null, 0],
            [[], [], 0],
            [[1], [1], 1]
        ];
    }

    /**
     * @dataProvider truthTableProvider
     */
    public function testTruthTable($a, $b, $expected)
    {
        $qandGate = new Qand($a, $b);
        $this->assertEquals($expected, $qandGate());
    }
}
