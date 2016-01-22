<?php

use Qool\Gate\Qnand;

class QnandTestCase extends PHPUnit_Framework_TestCase
{
    public function truthTableProvider()
    {
        return [
            [0, 0, 1],
            [1, 0, 1],
            [0, 1, 1],
            [1, 1, 0],
            [new stdClass(), new stdClass(), 0],
            [null, null, 1],
            [[], [], 1],
            [[1], [1], 0]
        ];
    }

    /**
     * @dataProvider truthTableProvider
     */
    public function testTruthTable($a, $b, $expected)
    {
        $qnandGate = new Qnand($a, $b);
        $this->assertEquals($expected, $qnandGate());
    }
}
