<?php
declare(strict_types=1);

namespace App\Tests;

use App\FizzBuzz;
use App\FizzBuzzInterface;
use PHPUnit\Framework\TestCase;

/**
 * Class FizzBuzzTest
 * @package App\Tests
 */
class FizzBuzzTest extends TestCase
{
    private $fizzBuzz;

    public function setUp()
    {
        parent::setUp();
        $this->fizzBuzz = new FizzBuzz();
    }

    /**
     * @return void
     */
    public function testFizzBuzzImplementsInterface(): void
    {
        $this->assertInstanceOf(FizzBuzzInterface::class, $this->fizzBuzz);
    }

    /**
     * @return void
     */
    public function testOneEqualsOne(): void
    {
        $this->assertEquals('1', $this->fizzBuzz->process(1));
    }

    /**
     * @return void
     */
    public function testTwoEqualsTwo(): void
    {
        $this->assertEquals('2', $this->fizzBuzz->process(2));
    }

    /**
     * @return void
     */
    public function testThreeEqualsFizz(): void
    {
        $this->assertEquals('Fizz', $this->fizzBuzz->process(3));
    }

    /**
     * @return void
     */
    public function testFourEqualsFour(): void
    {
        $this->assertEquals('4', $this->fizzBuzz->process(4));
    }
}
