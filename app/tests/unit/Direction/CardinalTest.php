<?php

namespace Hive\Toy\Test\Direction\Cardinal;

class CardinalTest extends \PHPUnit\Framework\TestCase
{
    private $direction;

    public function setUp(): void
    {
        $this->direction = new \Hive\Toy\Direction();
    }

    public function test_right_FromNorth_isEast()
    {
        $this->direction->set('NORTH');
        $this->direction->right();
        $this->assertEquals('EAST', $this->direction->get());
    }

    public function test_right_FromEast_isSouth()
    {
        $this->direction->set('EAST');
        $this->direction->right();
        $this->assertEquals('SOUTH', $this->direction->get());
    }

    public function test_right_FromSouth_isWest()
    {
        $this->direction->set('SOUTH');
        $this->direction->right();
        $this->assertEquals('WEST', $this->direction->get());
    }

    public function test_right_FromWest_isNorth()
    {
        $this->direction->set('WEST');
        $this->direction->right();
        $this->assertEquals('NORTH', $this->direction->get());
    }

    public function test_right_x2FromNorth_isSouth()
    {
        $this->direction->set('NORTH');
        $this->direction->right();
        $this->direction->right();
        $this->assertEquals('SOUTH', $this->direction->get());
    }

    public function test_right_x2FromEast_isWest()
    {
        $this->direction->set('EAST');
        $this->direction->right();
        $this->direction->right();
        $this->assertEquals('WEST', $this->direction->get());
    }

    public function test_right_x2FromSouth_isNorth()
    {
        $this->direction->set('SOUTH');
        $this->direction->right();
        $this->direction->right();
        $this->assertEquals('NORTH', $this->direction->get());
    }

    public function test_right_x2FromWest_isEast()
    {
        $this->direction->set('WEST');
        $this->direction->right();
        $this->direction->right();
        $this->assertEquals('EAST', $this->direction->get());
    }

    public function test_right_x3FromNorth_isWest()
    {
        $this->direction->set('NORTH');
        $this->direction->right();
        $this->direction->right();
        $this->direction->right();
        $this->assertEquals('WEST', $this->direction->get());
    }

    public function test_right_x3FromEast_isNorth()
    {
        $this->direction->set('EAST');
        $this->direction->right();
        $this->direction->right();
        $this->direction->right();
        $this->assertEquals('NORTH', $this->direction->get());
    }

    public function test_right_x3FromSouth_isEast()
    {
        $this->direction->set('SOUTH');
        $this->direction->right();
        $this->direction->right();
        $this->direction->right();
        $this->assertEquals('EAST', $this->direction->get());
    }

    public function test_right_x3FromWest_isSouth()
    {
        $this->direction->set('WEST');
        $this->direction->right();
        $this->direction->right();
        $this->direction->right();
        $this->assertEquals('SOUTH', $this->direction->get());
    }

    public function test_right_x4FromNorth_isNorth()
    {
        $this->direction->set('NORTH');
        $this->direction->right();
        $this->direction->right();
        $this->direction->right();
        $this->direction->right();
        $this->assertEquals('NORTH', $this->direction->get());
    }

    public function test_right_x4FromEast_isEast()
    {
        $this->direction->set('EAST');
        $this->direction->right();
        $this->direction->right();
        $this->direction->right();
        $this->direction->right();
        $this->assertEquals('EAST', $this->direction->get());
    }

    public function test_right_x4FromSouth_isSouth()
    {
        $this->direction->set('SOUTH');
        $this->direction->right();
        $this->direction->right();
        $this->direction->right();
        $this->direction->right();
        $this->assertEquals('SOUTH', $this->direction->get());
    }

    public function test_right_x4FromWest_isWest()
    {
        $this->direction->set('WEST');
        $this->direction->right();
        $this->direction->right();
        $this->direction->right();
        $this->direction->right();
        $this->assertEquals('WEST', $this->direction->get());
    }

    public function test_right_x5FromNorth_isEast()
    {
        $this->direction->set('NORTH');
        $this->direction->right();
        $this->direction->right();
        $this->direction->right();
        $this->direction->right();
        $this->direction->right();
        $this->assertEquals('EAST', $this->direction->get());
    }

    public function test_right_x5FromEast_isSouth()
    {
        $this->direction->set('EAST');
        $this->direction->right();
        $this->direction->right();
        $this->direction->right();
        $this->direction->right();
        $this->direction->right();
        $this->assertEquals('SOUTH', $this->direction->get());
    }

    public function test_right_x5FromSouth_isWest()
    {
        $this->direction->set('SOUTH');
        $this->direction->right();
        $this->direction->right();
        $this->direction->right();
        $this->direction->right();
        $this->direction->right();
        $this->assertEquals('WEST', $this->direction->get());
    }

    public function test_right_x5FromWest_isNorth()
    {
        $this->direction->set('WEST');
        $this->direction->right();
        $this->direction->right();
        $this->direction->right();
        $this->direction->right();
        $this->direction->right();
        $this->assertEquals('NORTH', $this->direction->get());
    }

    public function test_left_FromNorth_isWest()
    {
        $this->direction->set('NORTH');
        $this->direction->left();
        $this->assertEquals('WEST', $this->direction->get());
    }

    public function test_left_FromEast_isNorth()
    {
        $this->direction->set('EAST');
        $this->direction->left();
        $this->assertEquals('NORTH', $this->direction->get());
    }

    public function test_left_FromSouth_isEast()
    {
        $this->direction->set('SOUTH');
        $this->direction->left();
        $this->assertEquals('EAST', $this->direction->get());
    }

    public function test_left_FromWest_isSouth()
    {
        $this->direction->set('WEST');
        $this->direction->left();
        $this->assertEquals('SOUTH', $this->direction->get());
    }

    public function test_left_x2FromNorth_isSouth()
    {
        $this->direction->set('NORTH');
        $this->direction->left();
        $this->direction->left();
        $this->assertEquals('SOUTH', $this->direction->get());
    }

    public function test_left_x2FromEast_isWest()
    {
        $this->direction->set('EAST');
        $this->direction->left();
        $this->direction->left();
        $this->assertEquals('WEST', $this->direction->get());
    }

    public function test_left_x2FromSouth_isNorth()
    {
        $this->direction->set('SOUTH');
        $this->direction->left();
        $this->direction->left();
        $this->assertEquals('NORTH', $this->direction->get());
    }

    public function test_left_x2FromWest_isEast()
    {
        $this->direction->set('WEST');
        $this->direction->left();
        $this->direction->left();
        $this->assertEquals('EAST', $this->direction->get());
    }

    public function test_left_x3FromNorth_isEast()
    {
        $this->direction->set('NORTH');
        $this->direction->left();
        $this->direction->left();
        $this->direction->left();
        $this->assertEquals('EAST', $this->direction->get());
    }

    public function test_left_x3FromEast_isSouth()
    {
        $this->direction->set('EAST');
        $this->direction->left();
        $this->direction->left();
        $this->direction->left();
        $this->assertEquals('SOUTH', $this->direction->get());
    }

    public function test_left_x3FromSouth_isWest()
    {
        $this->direction->set('SOUTH');
        $this->direction->left();
        $this->direction->left();
        $this->direction->left();
        $this->assertEquals('WEST', $this->direction->get());
    }

    public function test_left_x3FromWest_isNorth()
    {
        $this->direction->set('WEST');
        $this->direction->left();
        $this->direction->left();
        $this->direction->left();
        $this->assertEquals('NORTH', $this->direction->get());
    }

    public function test_left_x4FromNorth_isNorth()
    {
        $this->direction->set('NORTH');
        $this->direction->left();
        $this->direction->left();
        $this->direction->left();
        $this->direction->left();
        $this->assertEquals('NORTH', $this->direction->get());
    }

    public function test_left_x4FromEast_isEast()
    {
        $this->direction->set('EAST');
        $this->direction->left();
        $this->direction->left();
        $this->direction->left();
        $this->direction->left();
        $this->assertEquals('EAST', $this->direction->get());
    }

    public function test_left_x4FromSouth_isSouth()
    {
        $this->direction->set('SOUTH');
        $this->direction->left();
        $this->direction->left();
        $this->direction->left();
        $this->direction->left();
        $this->assertEquals('SOUTH', $this->direction->get());
    }

    public function test_left_x4FromWest_isWest()
    {
        $this->direction->set('WEST');
        $this->direction->left();
        $this->direction->left();
        $this->direction->left();
        $this->direction->left();
        $this->assertEquals('WEST', $this->direction->get());
    }

    public function test_left_x5FromNorth_isWest()
    {
        $this->direction->set('NORTH');
        $this->direction->left();
        $this->direction->left();
        $this->direction->left();
        $this->direction->left();
        $this->direction->left();
        $this->assertEquals('WEST', $this->direction->get());
    }

    public function test_left_x5FromEast_isNorth()
    {
        $this->direction->set('EAST');
        $this->direction->left();
        $this->direction->left();
        $this->direction->left();
        $this->direction->left();
        $this->direction->left();
        $this->assertEquals('NORTH', $this->direction->get());
    }

    public function test_left_x5FromSouth_isEast()
    {
        $this->direction->set('SOUTH');
        $this->direction->left();
        $this->direction->left();
        $this->direction->left();
        $this->direction->left();
        $this->direction->left();
        $this->assertEquals('EAST', $this->direction->get());
    }

    public function test_left_x5FromWest_isSouth()
    {
        $this->direction->set('WEST');
        $this->direction->left();
        $this->direction->left();
        $this->direction->left();
        $this->direction->left();
        $this->direction->left();
        $this->assertEquals('SOUTH', $this->direction->get());
    }
}

