<?php

namespace Hive\Toy;

/**
 * General Exception Handler.
 *
 * Parent of exception handlers.
 */
class Exception extends \Exception
{

    /**
     * Arbitrarily assigned vendor exception code
     * used to prefix all package exceptions.
     */
    protected const VENDOR_NUMBER = 1618;

    /**
     * Package exception code, sequential package numbers.
     */
    protected const PACKAGE_NUMBER = 1;

    /**
     * Exception constructor, assigns the message and code and calls the exception handler.
     *
     * It will prepend the error code with the vendor code, package code and exception code,
     * so that we have a unique exception code.
     *
     * @param null|string $message The exceptions message.
     * @param null|int $code The exception code.
     */
    public function __construct($message = null, $code = null)
    {
        // Call the parent with the message and our now unique error code
        parent::__construct($message, self::VENDOR_NUMBER . self::PACKAGE_NUMBER . $code);
    }
}
