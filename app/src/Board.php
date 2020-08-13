<?php

namespace Hive\Toy;

/**
 * The board that the robot sits upon
 * @package Hive\Toy
 */
class Board implements Contract\Board
{
    /**
     * X Axis Coordinate
     * @var int
     */
    private $x;

    /**
     * Y Axis Coordinate
     * @var int
     */
    private $y;

    /**
     * Board constructor.
     * @param int $x
     * @param int $y
     */
    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * Returns a specific Coordinate
     * @param $axis
     * @return mixed
     */
    public function getAxis($axis)
    {
        if (in_array($axis, ['x', 'y'])) {
            return $this->$axis;
        } else {
            throw new invalidBoardAxis();
        }
    }

    /**
     * Get X Coordinate
     * @return int
     */
    public function getX(): int
    {
        return $this->x;
    }

    /**
     * Get Y Coordinate
     * @return int
     */
    public function getY(): int
    {
        return $this->y;
    }

    /**
     * Set the X Coordinate
     * @param int $x
     * @return Contract\Board
     */
    public function setX(int $x): Contract\Board
    {
        $this->x = $x;
        return $this;
    }

    /**
     * Set the Y Coordinate
     * @param int $y
     * @return Contract\Board
     */
    public function setY(int $y): Contract\Board
    {
        $this->y = $y;
        return $this;
    }
}
