<?php

namespace Hive\Toy\Exception;

use Hive\Toy\Exception;

/**
 * Class PlaceIsNotValid
 * @package Hive\Toy\Exception
 */
class InvalidDirection extends Exception
{
    /**
     * Exception code, sequential exception numbers.
     */
    public const CODE = 2;

    /**
     *  Exception Message to be displayed.
     */
    protected const MESSAGE = 'The direction supplied is not valid, ":input" was supplied - make sure the check the case and whitespace';

    /**
     * Method is not public constructor, assigns exception code the message.
     *
     * Will also place the name of the method into the exception message if we have it.
     *
     */
    public function __construct($input)
    {
        $message = strtr(self::MESSAGE, [':input' => $input]);
        parent::__construct($message, self::CODE);
    }
}
