<?php

namespace Lea\PHPUnit\Arithmetician\Test;

use InvalidArgumentException;
use Lea\PHPUnit\Arithmetician\BusinessLogic;
use Lea\PHPUnit\Arithmetician\Calculator;
use Mockery;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;

class BusinessLogicTest extends TestCase
{
    /** @var BusinessLogic $subject */
    private $subject;
    /** @var int $firstNumber */
    private $firstNumber;
    /** @var int $secondNumber */
    private $secondNumber;
    /** @var string $notANumber */
    private $notANumber;
    /** @var Calculator|MockInterface $mockedCalculator */
    private $mockedCalculator;

    //set the constant data for the test
    protected function setUp(): void
    {
        $this->firstNumber = 10;
        $this->secondNumber = 5;
        $this->notANumber = '#';
        $this->mockedCalculator = Mockery::mock(Calculator::class);
        $this->subject = new BusinessLogic($this->mockedCalculator);
    }

    /**
     * @test
     */
    public function classExist()
    {
        self::assertInstanceOf(BusinessLogic::class, $this->subject);
    }

    /**
     * @test
     */
    public function attributeExist()
    {
        self::assertClassHasAttribute('calculator', BusinessLogic::class);
    }

    /**
     * equivalence class
     * natural numbers
     * int, #
     * @test
     */
    public function secondInputIsNotAFloatOreANumber()
    {
        self::expectException(InvalidArgumentException::class);
        self::expectExceptionMessage('is not a number');
        self::expectExceptionCode(1571045675);
        $this->subject->calculateValue($this->firstNumber, $this->notANumber, '+');
    }

    /**
     * equivalence class
     * natural numbers
     * #, int
     * @test
     */
    public function firstInputIsNotAFloatOreANumber()
    {
        self::expectException(InvalidArgumentException::class);
        self::expectExceptionMessage('is not a number');
        self::expectExceptionCode(1571045675);
        $this->subject->calculateValue($this->notANumber, $this->secondNumber, '+');
    }


    /**
     * equivalence class
     * natural numbers
     * int, int
     * @test
     */
    public function outputFromAddition()
    {
        $this->mockedCalculator->shouldReceive('add')->once()->with(10, 5)->andReturn(15);
        $result = $this->subject->calculateValue($this->firstNumber, $this->secondNumber, '+');
        self::assertSame(15, $result);
    }

    /**
     * equivalence class
     * natural numbers
     * int, int
     * @test
     */
    public function outputFromSubtraction()
    {
        $this->mockedCalculator->shouldReceive('subtract')->once()->with(10, 5)->andReturn(5);
        $result = $this->subject->calculateValue($this->firstNumber, $this->secondNumber, '-');
        self::assertSame(5, $result);
    }

    /**
     * equivalence class
     * natural numbers
     * int, int
     * @test
     */
    public function outputFromMultiply()
    {
        $this->mockedCalculator->shouldReceive('multiply')->once()->with(10, 5)->andReturn(50);
        $result = $this->subject->calculateValue($this->firstNumber, $this->secondNumber, '*');
        self::assertSame(50, $result);
    }

    /**
     * equivalence class
     * natural numbers
     * int, int
     * @test
     */
    public function outputFromDivision()
    {
        $this->mockedCalculator->shouldReceive('divide')->once()->with(10, 5)->andReturn(2);
        $result = $this->subject->calculateValue($this->firstNumber, $this->secondNumber, '/');
        self::assertSame(2, $result);
    }

    /**
     * equivalence class
     * natural numbers
     * int, int
     * @test
     */
    public function outputFromFalseOperator()
    {
        $this->mockedCalculator->shouldReceive('division')->once()->with('#')
            ->andThrow(new InvalidArgumentException('I dont know this operator', 1571047500));
        self::expectException(InvalidArgumentException::class);
        self::expectExceptionMessage('know this operator');
        self::expectExceptionCode(1571047500);
        $this->subject->calculateValue($this->firstNumber, $this->secondNumber, '#');
    }

}
