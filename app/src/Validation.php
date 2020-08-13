<?php

namespace Hive\Toy;

use Hive\Toy\Contract;

/**
 * Abstract Class Validation
 */
abstract class Validation
{
    /**
     * The Raw input string
     * @var null|string
     */
    protected $input = null;

    /**
     * The sanitised input
     * @var null|array
     */
    protected $parsed = [];

    /**
     * Whether the string is valid.
     * @var null|bool
     */
    protected $valid = null;

    /**
     * The value, determined from the input.
     * @var null|string
     */
    protected $value = null;

    /**
     * The configuration to use while determining the match input
     * @var array
     */
    protected $config = [
        'pattern' => ''
    ];

    /**
     * Match constructor.
     * @param string $input the input string
     * @param array $config
     */
    public function __construct(string $input = '', $config = [])
    {
        $this->input = $input;

        // Merge the supplied configuration with supplied
        $this->config = array_merge($this->config, $config);
    }

    /**
     * Alias for creating a new object, quick little work around
     * that provides us with syntactic sugar.
     *
     * @param string $input
     * @return Contract\Validation
     */
    public function __invoke(string $input): Contract\Validation
    {
        // Utilise late static binding to return the correct class.
        return (new static($input));
    }


    /**
     * Whether or not the input is valid.
     *
     * Is an alias to the validate method, but will catch the exceptions to return a true/false
     * @return bool whether the input is valid.
     */
    public function isValid(): bool
    {
        try {
            return $this->validate();
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * Returns the value of the validation, if its valid.
     * Will throw errors if the data doesnt validate.
     * @return string|array|null
     */
    public function getValue()
    {
        return ($this->validate()) ? $this->value : null;
    }

    /**
     * Takes input data, processes to provide information.
     * @return $this
     */
    abstract protected function parse();

    /**
     * Validates the input, and throws an exception if not valid.
     */
    abstract public function validate(): bool;
}
