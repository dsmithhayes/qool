<?php

use Qool\Gate\Qand;
use Qool\Gate\Qor;

class CommutativeTestCase extends PHPUnit_Framework_TestCase
{
    private $a = 0;
    private $b = 1;

    /**
     * This law shows that (A + B) = (B + A)
     */
    public function testCaseAddition()
    {
        $c = new Qor($this->a, $this->b);
        $d = new Qor($this->b, $this->a);

        $this->assertEquals($c->output(), $d->output());
    }

    public function testCaseMultiplication()
    {
        $c = new Qand($this->a, $this->b);
        $d = new Qand($this->b, $this->a);

        $this->assertEquals($c->output(), $d->output());
    }
}
