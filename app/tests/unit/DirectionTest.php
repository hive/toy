<?php

namespace Hive\Toy\Test;

class DirectionTest extends \PHPUnit\Framework\TestCase
{
    public function setUp(): void
    {
        $this->direction = new \Hive\Toy\Direction();
    }

    public function test_set_withValidArgument_isValid()
    {
        $this->direction->set('FORWARD');
        $this->assertEquals('FORWARD', $this->direction->get());
    }

    public function test_set_withEmptyArgument_throwsException()
    {
        $this->expectException(\ArgumentCountError::class);
        $this->direction->set();
    }

    public function test_set_withIntegerArgument_throwsException()
    {
        $this->expectException(\Hive\Toy\Exception\InvalidDirection::class);
        $this->direction->set(1);
    }

    public function test_set_withNegativeArgument_throwsException()
    {
        $this->expectException(\Hive\Toy\Exception\InvalidDirection::class);
        $this->direction->set(-1);
    }

    public function test_set_withFalseArgument_throwsException()
    {
        $this->expectException(\Hive\Toy\Exception\InvalidDirection::class);
        $this->direction->set(false);
    }

    public function test_set_withNullArgument_throwsException()
    {
        $this->expectException(\TypeError::class);
        $this->direction->set(null);
    }

    public function test_set_withInvalidArgument_throwsException()
    {
        $this->expectException(\Hive\Toy\Exception\InvalidDirection::class);
        $this->direction->set('FOOBAR');
    }

    public function test_get_withoutSet_isInvalid()
    {
        $this->expectException(\Hive\Toy\Exception\DirectionIsNotSet::class);
        $this->direction->get();
    }

    public function test_get_afterSetValidArguments_isValid()
    {
        $this->direction->set('BACKWARD');
        $this->assertEquals('BACKWARD', $this->direction->get());
    }
}

