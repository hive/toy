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
    protected $current = null;


    /**
     * The Keys for the Matrix. 
     */
    const KEYS = [
        0 => 'FORWARD',
        1 => 'BACKWARD'
    ];

    /**
     * Matrix of each of the options and what they mean to the robots navigation
     */
    const OPTIONS = [
        0 => [
            'DIRECTION' => 'FORWARD',
            'AXIS' => 'x',
            'MOD' => +self::MOD
        ],
        1 => [
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

        return self::OPTIONS[$this->key()];
    }

    /**
     * Set the direction
     * @param string $direction
     * @return Contract\Direction
     * @throws Exception\InvalidDirection
     */
    public function set(string $direction): Contract\Direction
    {
        if (!in_array($direction, self::KEYS)) {
            throw new Exception\InvalidDirection($direction);
        }

        $this->current = array_search($direction, self::KEYS);

        return $this;
    }

    /**
     * Returns the current keu
     * @return string
     */
    private function key() : string
    {
        return self::KEYS[$this->current];
    }
}
