<?php

namespace Lea\PHPUnit\Arithmetician;

use InvalidArgumentException;

class Calculator
{

    /**
     * Add both parameters and return the sum.
     * @param int $int
     * @param int $int2
     * @return int|float
     */
    public function add($int, $int2)
    {
        $result = $int + $int2;
        return $result;
    }

    /**
     * Subtract both parameters and return the difference.
     * @param $int
     * @param $int2
     * @return int|float
     */
    public function subtract($int, $int2)
    {
        $result = $int - $int2;
        return $result;
    }

    /**
     * Divide both parameters and return the quotient, when second parameter is 0 than throw an InvalidArgumentException.
     * @param $int
     * @param $int2
     * @return float|int
     */
    //proof that the division by 0 is not allowed
    public function divide($int, $int2)
    {
        if ($int2 === 0) {
                throw new InvalidArgumentException('Division by zero is not allowed in that code', 1571046500);
        }

        $result = $int / $int2;
        return $result;
    }

    /**
     * Multiply both parameters and return the product.
     * @param $int
     * @param $int2
     * @return float|int
     */
    public function multiply($int, $int2)
    {
        $result = $int * $int2;
        return $result;
    }
}
