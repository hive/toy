<?php

namespace Hive\Toy;

/**
 * The board that the robot sits upon
 * @package Hive\Toy
 */
class Board implements Contract\Board
{
    /**
     * X Axis Size
     * @var int
     */
    private $x;

    /**
     * Y Axis Size
     * @var int
     */
    private $y;

    /**
     * Returns a specific axis size
     * @param $axis
     * @return int
     * @throws Exception\InvalidBoardAxis
     */
    public function get($axis): int
    {
        if (!in_array($axis, get_object_vars($this))) {
            throw new Exception\InvalidBoardAxis($axis);
        }
        return $this->$axis;
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
