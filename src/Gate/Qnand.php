<?php declare(strict_types = 1);

namespace Qool\Gate;

use Qool\Inverter;
use Qool\Gate\Qand;

/**
 * From this gate, we can build interesting little electronic components.
 */
class Qnand extends Qand
{
    /**
     * @return bool
     *      The invert return of the AND gate's output.
     */
    public function output(): bool
    {
        return Inverter::invert(parent::output());
    }
}
