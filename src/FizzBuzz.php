<?php
declare(strict_types=1);

namespace App;

/**
 * Class FizzBuzz
 * @package App
 */
class FizzBuzz implements FizzBuzzInterface
{
    /** @var int */
    private const DIVISOR_FIZZ = 3;

    /** @var int */
    private const DIVISOR_BUZZ = 5;

    /**
     * @param int $input
     * @return string
     */
    public function process(int $input): string
    {
        if ($input < 1) {
            throw new \OutOfRangeException('Number of input has to be greater than zero!');
        }

        $output = '';

        if ($this->divisibleBy($input, self::DIVISOR_FIZZ)) {
            $output .= 'Fizz';
        }

        if ($this->divisibleBy($input, self::DIVISOR_BUZZ)) {
            $output .= 'Buzz';
        }

        return $output?:(string)$input;
    }

    /**
     * @param int $input
     * @param int $divisor
     * @return bool
     */
    public function divisibleBy(int $input, int $divisor): bool
    {
        return $input % $divisor === 0;
    }
}
