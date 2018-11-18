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
    /** @var FizzBuzz */
    private $fizzBuzz;

    /**
     *
     */
    public function setUp()
    {
        parent::setUp();
        $this->fizzBuzz = new FizzBuzz();
    }

    public function provider(): array
    {
        return [
            [1, '1'],
            [2, '2'],
            [3, 'Fizz'],
            [4, '4'],
            [5, 'Buzz'],
            [6, 'Fizz'],
            [7, '7'],
            [8, '8'],
            [9, 'Fizz'],
            [10, 'Buzz'],
            [11, '11'],
            [12, 'Fizz'],
            [13, '13'],
            [14, '14'],
            [15, 'FizzBuzz'],
            [16, '16'],
            [17, '17'],
            [18, 'Fizz'],
            [19, '19'],
            [20, 'Buzz'],
            [21, 'Fizz'],
            [22, '22'],
            [23, '23'],
            [24, 'Fizz'],
            [25, 'Buzz'],
            [26, '26'],
            [27, 'Fizz'],
            [28, '28'],
            [29, '29'],
            [30, 'FizzBuzz'],
        ];
    }

    /**
     * @param int $input
     * @param string $expectedResult
     *
     * @return void
     * @dataProvider provider
     */
    public function testFizzBuzz(int $input, string $expectedResult): void
    {
        $this->assertEquals($expectedResult, $this->fizzBuzz->process($input));
    }

    /**
     * @return void
     */
    public function testFizzBuzzThrowsExceptionWhenNumberLowerThanOne(): void
    {
        $this->expectException(\OutOfRangeException::class);

        $this->fizzBuzz->process(0);
    }
}
