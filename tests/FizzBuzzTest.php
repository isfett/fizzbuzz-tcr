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
    public function testFourEqualsFour(): void
    {
        $this->assertEquals('4', $this->fizzBuzz->process(4));
    }
}
