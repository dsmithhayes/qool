<?php

use Qool\Gate\Qnand;

class QnandTestCase extends PHPUnit_Framework_TestCase
{
    public function truthTableProvider()
    {
        return [
            '0 + 0 = 0' => [0, 0, 1],
            '1 + 0 = 1' => [1, 0, 1],
            '1 + 1 = 1' => [1, 1, 0],

            'One instanciated class' => [new stdClass(), 0, 1],
            'Two instanciated class' => [new stdClass(), new stdClass(), 0],
            'Two nulls' => [null, null, 1],
            'Null and 1' => [null, 1, 1],

            'Two empty arrays' => [[], [], 1],
            'One empty array' => [[1], [], 1],
            'No empty arrays' => [[1], [1], 0]
        ];
    }

    /**
     * @dataProvider truthTableProvider
     */
    public function testTruthTable($a, $b, $expected)
    {
        $nandGate = new Qnand($a, $b);
        $this->assertEquals($expected, $nandGate());
    }
}
