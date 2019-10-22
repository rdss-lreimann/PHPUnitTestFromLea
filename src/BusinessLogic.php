<?php


namespace Lea\PHPUnit;

use InvalidArgumentException;
use Lea\PHPUnit\Test\MockTest;

class BusinessLogic
{
    private $calculator;

    public function __construct()
    {
        $this->calculator = new MockTest();
    }

    //look for the right operation
    public function calculateValue($firstNumber, $secondNumber, $operator)
    {
        if ($operator === '+') {
            return $this->calculator->proofTheOutputFromMockAddition($firstNumber, $secondNumber);
        } else if ($operator === '-') {
            return $this->calculator->proofTheOutputFromMockSubtraction($firstNumber, $secondNumber);
        } else if ($operator === '*') {
            return $this->calculator->proofTheOutputFromMockMultiply($firstNumber, $secondNumber);
        } else if ($operator === '/') {
            return $this->calculator->proofTheOutputFromMockDivision($firstNumber, $secondNumber);
        } else {
            throw new InvalidArgumentException('Dont know this operator', 1571047500);
        }
    }

}