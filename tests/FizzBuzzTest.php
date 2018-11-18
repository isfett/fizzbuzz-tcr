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
}
