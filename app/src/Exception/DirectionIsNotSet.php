<?php

namespace Hive\Toy\Exception;

use Hive\Toy\Exception;

/**
 * Class PlaceIsNotValid
 * @package Hive\Toy\Exception
 */
class DirectionIsNotSet extends Exception
{
    /**
     * Exception code, sequential exception numbers.
     */
    public const CODE = 1;

    /**
     *  Exception Message to be displayed.
     */
    protected const MESSAGE = 'The direction must be assigned (set) prior to retrieving (get).';

    /**
     * Method is not public constructor, assigns exception code the message.
     *
     * Will also place the name of the method into the exception message if we have it.
     *
     */
    public function __construct()
    {
        parent::__construct(self::MESSAGE, self::CODE);
    }
}
