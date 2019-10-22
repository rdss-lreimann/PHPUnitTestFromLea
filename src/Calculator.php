<?php


namespace Lea\PHPUnit;

use InvalidArgumentException;

class Calculator
{

    /**
     * Calculator constructor.
     */
    public function __construct()
    {
    }

    public function addition(int $int, int $int1)
    {
        $result = $int + $int1;
        return $result;
    }

    public function subtraction(int $int, int $int2)
    {
        $result = $int - $int2;
        return $result;
    }

    public function division(int $int, int $int2)
    {
        if ($int2 === 0) {
            throw new InvalidArgumentException('Division by zero is not allowed in that code', 1571046500);
        }

        $result = $int / $int2;

        return $result;
    }

    public function multiply(int $int, int $int2)
    {
        $result = $int * $int2;
        return $result;
    }
}