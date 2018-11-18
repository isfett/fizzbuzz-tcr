<?php
declare(strict_types=1);

namespace App;

/**
 * Class FizzBuzz
 * @package App
 */
class FizzBuzz implements FizzBuzzInterface
{
    /**
     * @param int $input
     * @return string
     */
    public function process(int $input): string
    {
        $output = '';

        if ($this->divisibleBy($input, 3)) {
            $output .= 'Fizz';
        }

        if ($this->divisibleBy($input, 5)) {
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
