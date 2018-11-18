<?php
declare(strict_types=1);

namespace App;

/**
 * Interface FizzBuzzInterface
 */
interface FizzBuzzInterface
{
    /**
     * @param int $input
     * @return string
     */
    public function process(int $input): string;
}
