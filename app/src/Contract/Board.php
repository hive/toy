<?php

namespace Hive\Toy\Contract;

interface Board
{
    /**
     * Board constructor.
     * @param int $x size of the x axis
     * @param int $y size of the y axis
     */
    public function __construct(int $x, int $y);

    /**
     * Get the size of the X axis
     * @return int
     */
    public function getX(): int;

    /**
     * Get the size of the Y axis
     * @return int
     */
    public function getY(): int;

    /**
     * Set the size of the X axis
     * @param int $x
     * @return Board
     */
    public function setX(int $x): Board;

    /**
     * Set the size of the X axis
     * @param int $y
     * @return Board
     */
    public function setY(int $y): Board;
}
