<?php
declare(strict_types=1);

namespace App;

/**
 * Class FizzBuzz
 * @package App
 */
class FizzBuzz implements FizzBuzzInterface
{
    public function process(int $input): string
    {
        if ($input === 3) {
            return 'Fizz';
        }
        return (string)$input;
    }
}
