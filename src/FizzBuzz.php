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
        if ($input % 3 === 0 && $input % 5 === 0) {
            return 'FizzBuzz';
        }
        elseif ($input % 3 === 0) {
            return 'Fizz';
        }
        elseif ($input % 5 === 0) {
            return 'Buzz';
        }
        return (string)$input;
    }
}
