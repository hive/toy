<?php

namespace Hive\Toy\Contract;

interface Validation
{
    public function __construct();

    public function __invoke(string $input): Validation;

    public function isValid(): bool;

    public function getValue();

    public function validate(): bool;
}
