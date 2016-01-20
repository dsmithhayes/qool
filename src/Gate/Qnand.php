<?php

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
