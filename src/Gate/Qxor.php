<?php

namespace Qool\Gate;

use Qool\Gate\Qor;

/**
 * XOR, or Exclusive Or, means one or the other is true, it cannot be both.
 */
class Qxor extends Qor
{
    public function output(): bool
    {
        if ($this->a && $this->b) {
            return false;
        }

        return (bool)($this->a || $this->b);
    }
}
