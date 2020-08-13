<?php

namespace Hive\Toy\Contract;

interface Robot
{
    /**
     * Robot constructor.
     */
    public function __construct(Contract\Board $board);

    /**
     * Place the Robot on the board
     */
    public function place(): void;

    /**
     * Move the position of the robot.
     */
    public function move(): void;

    /**
     * Rotate 90 degrees to the left
     */
    public function left(): void;

    /**
     * Rotate 90 degrees to the right
     */
    public function right(): void;

    /**
     * Report the current position of the robot
     * @return string
     */
    public function report(): string;
}
