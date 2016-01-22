<?php

use Qool\Gate\Qor;

class QorTestCase extends PHPUnit_Framework_TestCase
{
    public function truthTableProvider()
    {
        return [
            '0 + 0 = 0' => [0, 0, 0],
            '1 + 0 = 1' => [1, 0, 1],
            '1 + 1 = 1' => [1, 1, 1],

            'One instanciated class' => [new stdClass(), 0, 1],
            'Two instanciated class' => [new stdClass(), new stdClass(), 1],
            'Two nulls' => [null, null, 0],
            'Null and 1' => [null, 1, 1],

            'Two empty arrays' => [[], [], 0],
            'One empty array' => [[1], [], 1],
            'No empty arrays' => [[1], [1], 1]
        ];
    }

    /**
     * @dataProvider truthTableProvider
     */
    public function testTruthTable($a, $b, $expected)
    {
        $orGate = new Qor($a, $b);
        $this->assertEquals($expected, $orGate());
    }
}
