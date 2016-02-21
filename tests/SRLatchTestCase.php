<?php

use Qool\Latch\SR;

class SRLatchTestCase extends PHPUnit_Framework_TestCase
{
    public function testSRLatch()
    {
        $sr = new SR(0, 1);
        echo "Q:\t" . $sr->run()->q() . "\n";
        echo "Q-not\t" . $sr->run()->qNot() . "\n";
    }
}
