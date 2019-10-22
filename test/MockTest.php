<?php


namespace Lea\PHPUnit\Test;

use Lea\PHPUnit\Calculator;
use Mockery;

class MockTest
{
    //mock the calculator addition function
    public function proofTheOutputFromMockAddition($firstNumber, $secondNumber)
    {
        $mockCalculator = Mockery::mock(Calculator::class);
        $mockCalculator->shouldReceive('addition')
            ->once()
            ->andReturn(15);
        return $mockCalculator->addition($firstNumber, $secondNumber);

    }

    //mock the calculator subtraction functiom
    public function proofTheOutputFromMockSubtraction($firstNumber, $secondNumber)
    {
        $mockCalculator = Mockery::mock(Calculator::class);
        $mockCalculator->shouldReceive('addition')
            ->once()
            ->andReturn(5);
        return $mockCalculator->addition($firstNumber, $secondNumber);
    }

    //mock the calculator multiply function
    public function proofTheOutputFromMockMultiply($firstNumber, $secondNumber)
    {
        $mockCalculator = Mockery::mock(Calculator::class);
        $mockCalculator->shouldReceive('addition')
            ->once()
            ->andReturn(50);
        return $mockCalculator->addition($firstNumber, $secondNumber);
    }

    //mock the calculator division function
    public function proofTheOutputFromMockDivision($firstNumber, $secondNumber)
    {
        $mockCalculator = Mockery::mock(Calculator::class);
        $mockCalculator->shouldReceive('addition')
            ->once()
            ->andReturn(2);
        return $mockCalculator->addition($firstNumber, $secondNumber);
    }
}