<?php

namespace Lea\PHPUnit\Arithmetician\Test;

use InvalidArgumentException;
use Lea\PHPUnit\Arithmetician\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{

    /** @var Calculator $subject */
    private $subject;
    /** @var int $firstNumber */
    private $firstNumber;
    /** @var int $secondNumber */
    private $secondNumber;
    /** @var int $numberZero */
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
     * natural Numbers
     * int, int
     * @test
     */
    public function firstOutputFromMethodAdd()
    {
        $result = $this->subject->add($this->firstNumber, $this->secondNumber);
        self::assertSame(15, $result);
    }

    /**
     * equivalence class for addition
     * natural Numbers
     * int, -int
     * @test
     */
    public function secondOutputFromMethodAdd()
    {
        $result = $this->subject->add($this->firstNumber, -$this->secondNumber);
        self::assertSame(5, $result);
    }

    /**
     * equivalence class for addition
     * natural Numbers
     * -int, int
     * @test
     */
    public function thirdOutputFromMethodAdd()
    {
        $result = $this->subject->add(-$this->firstNumber, $this->secondNumber);
        self::assertSame(-5, $result);
    }

    /**
     * equivalence class for addition
     * natural Numbers
     * -int, -int
     * @test
     */
    public function fourthOutputFromMethodAdd()
    {
        $result = $this->subject->add(-$this->firstNumber, -$this->secondNumber);
        self::assertSame(-15, $result);
    }

    /**
     * equivalence class for subtraction
     * natural Numbers
     * int, int
     * @test
     */
    public function firstOutputFromMethodSubtract()
    {
        $result = $this->subject->subtract($this->firstNumber, $this->secondNumber);
        self::assertSame(5, $result);
    }

    /**
     * equivalence class for subtraction
     * natural Numbers
     * int, -int
     * @test
     */
    public function secondOutputFromMethodSubtract()
    {
        $result = $this->subject->subtract($this->firstNumber, -$this->secondNumber);
        self::assertSame(15, $result);
    }

    /**
     * equivalence class for subtraction
     * natural Numbers
     * - int, int
     * @test
     */
    public function thirdOutputFromMethodSubtract()
    {
        $result = $this->subject->subtract(-$this->firstNumber, $this->secondNumber);
        self::assertSame(-15, $result);
    }

    /**
     * equivalence class for subtraction
     * natural Numbers
     * - int, - int
     * @test
     */
    public function fourthOutputFromMethodSubtract()
    {
        $result = $this->subject->subtract(-$this->firstNumber, -$this->secondNumber);
        self::assertSame(-5, $result);
    }

    /**
     * equivalence class for multiply
     * natural Numbers
     * int, int
     * @test
     */
    public function firstOutputFromMethodMultiply()
    {
        $result = $this->subject->multiply($this->firstNumber, $this->secondNumber);
        self::assertSame(50, $result);
    }

    /**
     * equivalence class for multiply
     * natural Numbers
     * int, -int
     * @test
     */
    public function secondOutputFromMethodMultiply()
    {
        $result = $this->subject->multiply($this->firstNumber, -$this->secondNumber);
        self::assertSame(-50, $result);
    }

    /**
     * equivalence class for multiply
     * natural Numbers
     * -int, int
     * @test
     */
    public function thirdOutputFromMethodMultiply()
    {
        $result = $this->subject->multiply(-$this->firstNumber, $this->secondNumber);
        self::assertSame(-50, $result);
    }

    /**
     * equivalence class for multiply
     * natural Numbers
     * -int, -int
     * @test
     */
    public function fourthOutputFromMethodMultiply()
    {
        $result = $this->subject->multiply(-$this->firstNumber, -$this->secondNumber);
        self::assertSame(50, $result);
    }

    /**
     * equivalence class for division
     * natural Numbers
     * int, int
     * @test
     */
    public function firstOutputFromMethodDivide()
    {
        $result = $this->subject->divide($this->firstNumber, $this->secondNumber);
        self::assertSame(2, $result);
    }

    /**
     * equivalence class for division
     * natural Numbers
     * int, -int
     * @test
     */
    public function secondOutputFromMethodDivide()
    {
        $result = $this->subject->divide($this->firstNumber, -$this->secondNumber);
        self::assertSame(-2, $result);
    }

    /**
     * equivalence class for division
     * natural Numbers
     * -int, int
     * @test
     */
    public function thirdOutputFromMethodDivide()
    {
        $result = $this->subject->divide(-$this->firstNumber, $this->secondNumber);
        self::assertSame(-2, $result);
    }


    /**
     * equivalence class for division
     * natural Numbers
     * -int, -int
     * @test
     */
    public function fourthOutputFromMethodDivide()
    {
        $result = $this->subject->divide(-$this->firstNumber, -$this->secondNumber);
        self::assertSame(2, $result);
    }

    /**
     * equivalence class for division
     * natural Numbers
     * int, 0
     * @test
     */
    public function divisionByNullIsNotAllowed()
    {
        self::expectException(InvalidArgumentException::class);
        self::expectExceptionMessage('zero is not allowed');
        self::expectExceptionCode(1571046500);
        $result = $this->subject->divide($this->firstNumber, $this->numberZero);
    }
}
