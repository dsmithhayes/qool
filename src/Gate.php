<?php declare(strict_types = 1);

namespace Qool;

/**
 * Essentially every object in this library is a type of gate. The only thing
 * I don't consider to be a gate is the inverter, its a single input device.
 *
 * @author Dave Smith-Hayes <me@davesmith-hayes.com>
 */
abstract class Gate
{
    /**
     * @var mixed $a
     *      The variable that holds the first input, should have a boolean state
     */
    protected $a;

    /**
     * @var mixed $b
     *      The variable that holds the second input, should have a boolean
     *      state
     */
    protected $b;

    /**
     * Constructor will set the gate's input
     */
    public function __construct($a = 0, $b = 0)
    {
        $this->set($a, $b);
    }

    /**
     * Calling the class itself will just return the output of the gate
     */
    public function __invoke()
    {
        return $this->output();
    }

    /**
     * Ideally every Gate will have an 'a', and 'b' input.
     *
     * @param mixed $a
     *      The first input, anything that can have a high or low state
     * @param mixed $b
     *      The second input, anything that can have a high or low state
     */
    public function set($a, $b)
    {
        $this->a = (bool)$a;
        $this->b = (bool)$b;
    }

    /**
     * The output is going to be a high or low result of what's set, by default
     * it is low because active low is a thing.
     *
     * @return bool
     */
    public function output(): bool
    {
        return false;
    }
}
