<?php

namespace Ottosmops\Ids\Test;

use Ottosmops\Ids\Ids;
use PHPUnit\Framework\TestCase;

class ParseIdsTest extends TestCase
{
    public function test_it_parses_a_single_integer()
    {
        $expected = [3];
        $actual = Ids::parse("3");
        $this->assertEquals($expected, $actual);
    }

    public function test_it_parses_a_two_integers()
    {
        $expected = [3,4];
        $actual = Ids::parse("3, 4");
        $this->assertEquals($expected, $actual);
    }

    public function test_it_parses_a_range()
    {
        $expected = [3,4,5];
        $actual = Ids::parse("3-5");
        $this->assertEquals($expected, $actual);
    }

    public function test_it_something_complicated()
    {
        $expected = [3,4,5,7,9,10,11];
        $actual = Ids::parse("3-5, 7, 9-11");
        $this->assertEquals($expected, $actual);
    }

    public function test_it_throws_a_invalid_argument_exception()
    {
        $this->expectException(\InvalidArgumentException::class);
        Ids::parse("5--3");
    }

    public function test_it_throws_a_invalid_argument_exception2()
    {
        $this->expectException(\InvalidArgumentException::class);
        Ids::parse("hallo");
    }

    public function test_it_throws_a_invalid_argument_exception3()
    {
        $this->expectException(\InvalidArgumentException::class);
        Ids::parse("3&5");
    }

}
