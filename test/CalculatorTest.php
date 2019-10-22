<?php

namespace Lea\PHPUnit\Test;

use InvalidArgumentException;
use Lea\PHPUnit\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{

    /**
     * @var Calculator
     */
    private $subject;
    private $firstNumber;
    private $secondNumber;
    private $numberZero;

    protected function setUp(): void
    {
        $this->subject = new Calculator();
        $this->firstNumber = 10;
        $this->secondNumber = 5;
        $this->numberZero = 0;
    }

    /**
     * equivalence class for addition
     *
     * natural Numbers
     *
     * 1. int, int
     * 2. int, -int
     * 3. -int, int
     * 4. -int, -int
     */

    /**
     * @test
     */
    public function proofTheFirstOutputFromMethodAddition()
    {
        $result = $this->subject->addition($this->firstNumber, $this->secondNumber);
        self::assertSame(15, $result);
    }

    /**
     * @test
     */
    public function proofTheSecondOutputFromMethodAddition()
    {
        $result = $this->subject->addition($this->firstNumber, - $this->secondNumber);
        self::assertSame(5, $result);
    }

    /**
     * @test
     */
    public function proofTheThirdOutputFromMethodAddition()
    {
        $result = $this->subject->addition(- $this->firstNumber, $this->secondNumber);
        self::assertSame(-5, $result);
    }

    /**
     * @test
     */
    public function proofTheFourthOutputFromMethodAddition()
    {
        $result = $this->subject->addition(- $this->firstNumber, - $this->secondNumber);
        self::assertSame(-15, $result);
    }


    /**
     * equivalence class for subtraction
     *
     * natural Numbers
     *
     * 1. int, int
     * 2. int, -int
     * 3. -int, int
     * 4. -int, -int
     */

    /**
     * @test
     */
    public function proofTheFirstOutputFromMethodSubtraction()
    {
        $result = $this->subject->subtraction($this->firstNumber, $this->secondNumber);
        self::assertSame(5, $result);
    }

    /**
     * @test
     */
    public function proofTheSecondOutputFromMethodSubtraction()
    {
        $result = $this->subject->subtraction($this->firstNumber, - $this->secondNumber);
        self::assertSame(15, $result);
    }

    /**
     * @test
     */
    public function proofTheThirdOutputFromMethodSubtraction()
    {
        $result = $this->subject->subtraction(- $this->firstNumber, $this->secondNumber);
        self::assertSame(-15, $result);
    }

    /**
     * @test
     */
    public function proofTheFourthOutputFromMethodSubtraction()
    {
        $result = $this->subject->subtraction(- $this->firstNumber, - $this->secondNumber);
        self::assertSame(-5, $result);
    }







    /**
     * equivalence class for multiply
     *
     * natural Numbers
     *
     * 1. int, int
     * 2. int, -int
     * 3. -int, int
     * 4. -int, -int
     */


    /**
     * @test
     */
    public function proofTheFirstOutputFromMethodMultiply()
    {
        $result = $this->subject->multiply($this->firstNumber, $this->secondNumber);
        self::assertSame(50, $result);
    }

    /**
     * @test
     */
    public function proofTheSecondOutputFromMethodMultiply()
    {
        $result = $this->subject->multiply($this->firstNumber, - $this->secondNumber);
        self::assertSame(-50, $result);
    }

    /**
     * @test
     */
    public function proofTheThirdOutputFromMethodMultiply()
    {
        $result = $this->subject->multiply(- $this->firstNumber, $this->secondNumber);
        self::assertSame(-50, $result);
    }

    /**
     * @test
     */
    public function proofTheFourthOutputFromMethodMultiply()
    {
        $result = $this->subject->multiply(- $this->firstNumber, - $this->secondNumber);
        self::assertSame(50, $result);
    }


    /**
     * equivalence class for division
     *
     * natural Numbers
     *
     * 1. int, int
     * 2. int, -int
     * 3. -int, int
     * 4. -int, -int
     * 5. int, 0
     */


    /**
     * @test
     */
    public function proofTheFirstOutputFromMethodDivision()
    {
        $result = $this->subject->division($this->firstNumber, $this->secondNumber);
        self::assertSame(2, $result);
    }

    /**
     * @test
     */
    public function proofTheSecondOutputFromMethodDivision()
    {
        $result = $this->subject->division($this->firstNumber, - $this->secondNumber);
        self::assertSame(-2, $result);
    }

    /**
     * @test
     */
    public function proofTheThirdOutputFromMethodDivision()
    {
        $result = $this->subject->division(- $this->firstNumber, $this->secondNumber);
        self::assertSame(-2, $result);
    }

    /**
     * @test
     */
    public function proofTheFourthOutputFromMethodDivision()
    {
        $result = $this->subject->division(- $this->firstNumber, - $this->secondNumber);
        self::assertSame(2, $result);
    }

    /**
     * @test
     */
    public function proofTheFifthOutputFromMethodDivision()
    {

        self::expectException(InvalidArgumentException::class);
        self::expectExceptionMessage('zero is not allowed');
        self::expectExceptionCode(1571046500);
        $result = $this->subject->division($this->firstNumber, $this->numberZero);
    }

}