<?php

namespace Qool;

/**
 * @author Dave Smith-Hayes <me@davesmith-hayes.com>
 */
abstract class Inverter
{
    /**
     * @param mixed $a
     *      Any value that can old a high or low state
     * @return bool
     *      Reversed state of the input
     */
    public static function invert($a)
    {
        return !$a;
    }
}
