<?php

namespace Qool\Gate;

use Qool\Gate;

class Qor extends Gate
{
    public function output(): bool
    {
        return (bool)($this->a || $this->b);
    }
}
