<?php

namespace Qool\Gate;

use Qool\Gate;

/**
 * OR logic is that either one, or the other, is a valid true.
 */
class Qor extends Gate
{
    public function output(): bool
    {
        return (bool)($this->a || $this->b);
    }
}
