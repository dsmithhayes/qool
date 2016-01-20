<?php

use Qool\Gate\Qand;
use Qool\Gate\Qor;

class DistributiveTestCase extends PHPUnit_Framework_TestCase
{
    protected $a = 0;
    protected $b = 1;
    protected $c = 1;

    /**
     * The distributive law is a very basic one that states:
     * (A * (B + C)) = ((A * B) + (A * B))
     */
    public function testDistributiveLaw()
    {
        /**
         * (A (B + C))
         */
        $bc = new Qor($this->b, $this->c);
        $a_bc = new Qand($this->a, $bc());

        /**
         * ((A * B) + (A * C))
         */
        $ab = new Qand($this->a, $this->b);
        $ac = new Qand($this->a, $this->c);
        $ab_ac = new Qor($ab(), $ac());

        $this->assertEquals($a_bc(), $ab_ac());
    }
}
