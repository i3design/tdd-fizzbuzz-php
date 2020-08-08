<?php

declare(strict_types=1);

namespace FizzBuzz;

class FizzBuzz
{
    public function convert(int $i): string
    {
        if ($i % 3 === 0) {
            return "Fizz";
        }
        if ($i % 5 === 0) {
            return "Buzz";
        }

        return (string) $i;
    }
}