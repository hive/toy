<?php

namespace Hive\Toy\Direction;

/**
 * Class Direction
 *
 * Extends the direction with ability to move left/right
 *
 * @package Hive\Toy
 */
class Cardinal extends \Hive\Toy\Direction
{

    /**
     * Move the robot facing 90 degrees to the left.
     */
    public function left(): void
    {
        if (isset(self::CARDINAL[$this->current - self::MOD])) {
            $this->current = $this->current - self::MOD;
        } else {
            $this->current = array_key_last(self::CARDINAL);
        }
    }

    /**
     * Move the robot facing  90 degrees to the right.
     */
    public function right(): void
    {

    }
}
