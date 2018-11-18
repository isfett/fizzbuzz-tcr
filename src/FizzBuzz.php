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

        if ($input % 3 === 0) {
            $output .= 'Fizz';
        }

        if ($input % 5 === 0) {
            $output .= 'Buzz';
        }

        return $output?:(string)$input;
    }
}
