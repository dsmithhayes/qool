<?php declare(strict_types = 1);

namespace Qool;

/**
 * Latches should be full of Gate objects.
 */
abstract class Latch
{
    /**
     * Running the latch is a pretty basic idea. You just apply the logic that
     * corresponds with the truth table logic of the latch. If there are
     * multiple outputs, just set them and return itself. There should be
     * methods for each output to get their state after the run.
     */
    abstract public function run();
}
