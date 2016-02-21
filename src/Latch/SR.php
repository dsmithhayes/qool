<?php declare(strict_types = 1);

namespace Qool\Latch;

use Qool\Latch;
use Qool\Gate\Qnor;

/**
 * SR latches have a set and reset input, Q and Q-not outputs.
 */
class SR extends Latch
{
    /**
     * @var bool
     *      The S input state
     */
    protected $s;

    /**
     * @var bool
     *      The R input state
     */
    protected $r;

    /**
     * @var \Qool\Gate\Qnor
     *      A nor gate
     */
    protected $nor1;

    /**
     * @var \Qool\Gate\Qnor
     *      A nor gate
     */
    protected $nor2;

    /**
     * @param bool $s
     *      The state of the S input of the latch
     * @param bool $r
     *      The state of the R input of the latch
     */
    public function __construct($s = 0, $r = 0)
    {
        $this->set($s, $r);
    }

    /**
     * @param bool $s
     *      The state of the S input of the latch
     * @param bool $r
     *      The state of the R input of the latch
     */
    public function set($s, $r)
    {
        $this->s = (bool)$s;
        $this->r = (bool)$r;
    }

    /**
     * @return bool
     *      The output of Q based on the inputs of S and R
     */
    public function q(): bool
    {

    }

    /**
     * @return bool
     *      The output of the Q-not based on the inputs of S and R
     */
    public function qNot(): bool
    {

    }

    /**
     * Set the output values of Q and Q-not, then return itself to access either
     * or.
     *
     * @return \Qool\Latch\SR
     */
    public function run(): \Qool\Latch\SR
    {
        return $this;
    }
}
