<?php

namespace Hive\Toy;

/**
 * Class Direction
 * @package Hive\Toy
 */
class Direction implements \Hive\Toy\Contract\Direction
{
    /**
     * How much to alter the direction by.
     */
    const MOD = 1;

    /**
     * @var integer current direction index
     */
    private $current = null;

    /**
     * Matrix of each of the options and what they mean to the robots navigation
     */
    const OPTIONS = [
        'FORWARD' => [
            'DIRECTION' => 'FORWARD',
            'AXIS' => 'x',
            'MOD' => +self::MOD
        ],
        'BACKWARD' => [
            'DIRECTION' => 'BACKWARD',
            'AXIS' => 'x',
            'MOD' => -self::MOD
        ]
    ];

    /**
     * Get the direction
     * @return array
     * @throws Exception\DirectionIsNotSet
     */
    public function get(): array
    {
        if (is_null($this->current)){
            throw new Exception\DirectionIsNotSet();
        }

        return self::OPTIONS[$this->current];
    }

    /**
     * Set the direction
     * @param string $direction
     * @return Contract\Direction
     * @throws Exception\InvalidDirection
     */
    public function set(string $direction): Contract\Direction
    {
        if (!array_key_exists($direction, self::OPTIONS)) {
            throw new Exception\InvalidDirection($direction);
        }

        $this->current = $direction;

        return $this;
    }
}
