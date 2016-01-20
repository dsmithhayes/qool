<?php declare(strict_types = 1);

namespace Qool\Gate;

use Qool\Gate;

class Qand extends Gate
{
    /**
     * This is a more arbitrary output. I can see a lot of problems coming out
     * of this method, but really just extend it and to all your fail-fasting
     * in there.
     *
     * @return bool
     *      True if both 'a' and 'b' are true
     */
    public function ouput(): bool
    {
        return (bool)($this->a && $this->b);
    }
}
