<?php declare(strict_types = 1);

namespace Qool\Gate;

use Qool\Inverter;
use Qool\Gate\Qand;

class Qnand extends Qand
{
    public function output(): bool
    {
        return Inverter::invert(parent::output());
    }
}
