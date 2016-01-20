<?php declare(strict_types = 1);

namespace Qool\Gate;

use Qool\Inverter;
use Qool\Gate\Qor;

class Qnor extends Qor
{
    public function output(): bool
    {
        return Inverter::invert(parent::output());
    }
}
