<?php

use Qool\Gate\Qnor;

class QnorTestCase extends PHPUnit_Framework_TestCase
{
    public function truthTableProvider()
    {
        return [
            '0 + 0 = 0' => [0, 0, 1],
            '1 + 0 = 1' => [1, 0, 0],
            '1 + 1 = 1' => [1, 1, 0],

            'One instanciated class' => [new stdClass(), 0, 0],
            'Two instanciated class' => [new stdClass(), new stdClass(), 0],
            'Two nulls' => [null, null, 1],
            'Null and 1' => [null, 1, 0],

            'Two empty arrays' => [[], [], 1],
            'One empty array' => [[1], [], 0],
            'No empty arrays' => [[1], [1], 0]
        ];
    }

    /**
     * @dataProvider truthTableProvider
     */
    public function testTruthTable($a, $b, $expected)
    {
        $norGate = new Qnor($a, $b);
        $this->assertEquals($expected, $norGate());
    }
}
