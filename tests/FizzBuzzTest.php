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
}
