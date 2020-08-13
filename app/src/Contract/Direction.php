<?php

namespace Hive\Toy\Contract;

/**
 * Used to navigate and store the direction an object is facing.
 * @package Hive\Toy\Contract
 */
interface Direction
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
