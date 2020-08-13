<?php

namespace Hive\Toy\Contract;

/**
 * Used to navigate the facing of an object.
 * @package Hive\Toy\Contract
 */
interface Navigation
{
    /**
     * Face to the left
     */
    public function left(): void;

    /**
     * Face to the right
     */
    public function right(): void;

    /**
     * Get the current facing details.
     * @return array
     */
    public function get(): array;
}
