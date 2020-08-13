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
     * The Keys for the Matrix.
     */
    const KEYS = [
        'NORTH',
        'EAST',
        'SOUTH',
        'WEST'
    ];

    /**
     * Matrix of each of the options and what they mean to the robots navigation
     */
    const OPTIONS = [
        [
            'DIRECTION' => 'NORTH',
            'AXIS' => 'y',
            'MOD' => +self::MOD
        ],
        [
            'DIRECTION' => 'EAST',
            'AXIS' => 'x',
            'MOD' => +self::MOD
        ],
        [
            'DIRECTION' => 'SOUTH',
            'AXIS' => 'y',
            'MOD' => -self::MOD
        ],
        [
            'DIRECTION' => 'WEST',
            'AXIS' => 'x',
            'MOD' => -self::MOD
        ]
    ];

    /**
     * Move the robot facing 90 degrees to the left.
     */
    public function left(): void
    {
        if (isset(self::OPTIONS[$this->current - self::MOD])) {
            $this->current -= self::MOD;
        } else {
            $this->current = array_key_last(self::OPTIONS);
        }
    }

    /**
     * Move the robot facing  90 degrees to the right.
     */
    public function right(): void
    {
        if (isset(self::OPTIONS[$this->current + self::MOD])) {
            $this->current += self::MOD;
        } else {
            $this->current = array_key_first(self::OPTIONS);
        }
    }
}
