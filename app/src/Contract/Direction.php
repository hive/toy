<?php

namespace Hive\Toy\Contract;

/**
 * Used to navigate and store the direction an object is facing.
 * @package Hive\Toy\Contract
 */
interface Direction
{
    /**
     * Get the current facing details.
     * @return array
     */
    public function get(): array;

    /**
     * Set the current direction the object is facing.
     * @param string $direction
     */
    public function set(string $direction): self;
}
