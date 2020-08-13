<?php

namespace Hive\Toy\Test;

class BoardTest extends \PHPUnit\Framework\TestCase
{
    private $board;

    public function setUp(): void
    {
        $this->board = new \Hive\Toy\Board();
    }

    // The default values
    public function test_construct_withNullCoordinateArguments_isValid()
    {
        try {
            new \Hive\Toy\Board();
        } catch (\Exception $e) {
            $this->fail();
        }

    }

    public function test_getAxis_withNullCoordinateArguments_isInvalid()
    {
        $this->fail('soon');
    }

    public function test_getX_withNullCoordinateArguments_isInvalid()
    {
        $this->fail('soon');
    }

    public function test_getY_withNullCoordinateArguments_isValid()
    {
        $this->fail('soon');
    }

    public function test_getAxis_withValidCoordinateArguments_isValid()
    {
        $this->fail('soon');
    }

    public function test_getX_withValidCoordinateArguments_isValid()
    {
        $this->fail('soon');
    }

    public function test_getY_withValidCoordinateArguments_isValid()
    {
        $this->fail('soon');
    }

    public function test_getX_afterSetX_isValid()
    {
        $this->fail('soon');
    }

    public function test_getY_afterSetY_isValid()
    {
        $this->fail('soon');
    }

    public function test_getAxis_afterSetY_isValid()
    {
        $this->fail('soon');
    }

    public function test_getAxis_afterSetX_isValid()
    {
        $this->fail('soon');
    }

    public function test_getAxis_afterSetXAndSetY_isValid()
    {
        $this->fail('soon');
    }

    public function test_setX_withNegative_isInvalid()
    {
        $this->fail('soon');
    }

    public function test_setY_withNegative_isInvalid()
    {
        $this->fail('soon');
    }

    public function test_setX_withFalse_isInvalid()
    {
        $this->fail('soon');
    }

    public function test_setY_withFalse_isInvalid()
    {
        $this->fail('soon');
    }

    public function test_setY_withZero_isInvalid()
    {
        $this->fail('soon');
    }

    public function test_setX_withZero_isInvalid()
    {
        $this->fail('soon');
    }

    public function test_setX_withExpected_isValid()
    {
        $this->fail('soon');
    }

    public function test_setY_withExpected_isValid()
    {
        $this->fail('soon');
    }
}
