<?php

use Qool\Gate\Qand;
use Qool\Gate\Qor;

class AssociativeTestCase extends PHPUnit_Framework_TestCase
{
    protected $a = 0;
    protected $b = 1;
    protected $c = 1;

    /**
     * Addition of Associative law is that (A + (B + C)) = ((A + B) + C)
     */
    public function testAddition()
    {
        $bc = new Qor($this->b, $this->c);
        $a_bc = new Qor($this->a, $bc);

        $ab = new Qor($this->a, $this->b);
        $c_ab = new Qor($this->c, $ab);

        $this->assertEquals($a_bc->output(), $c_ab->output());
    }
}
