<?php


namespace Lea\PHPUnit\Test;

use InvalidArgumentException;
use Lea\PHPUnit\BusinessLogic;
use PHPUnit\Framework\TestCase;

class BusinessLogicTest extends TestCase
{
    private $businessLogic;
    private $mockTest;
    private $firstNumber;
    private $secondNumber;


    //set the constant data for the test
    protected function setUp(): void
    {
        $this->firstNumber = 10;
        $this->secondNumber = 5;
        $this->businessLogic = new BusinessLogic();
        $this->mockTest = new MockTest();
    }

    /**
     * @test
     */
    public function proofIfTheClassExist()
    {
        self::assertInstanceOf(BusinessLogic::class, $this->businessLogic);
        self::assertInstanceOf(MockTest::class, $this->mockTest);
    }

    /**
     * @test
     */
    public function proofThatTheAttributeExist()
    {
        self::assertClassHasAttribute('calculator', BusinessLogic::class);
    }

    /**
     * @test
     */
    public function proofThatTheAttributeIsNotEmpty()
    {
        self::assertIsNumeric($this->firstNumber);
        self::assertIsNumeric($this->secondNumber);
    }

    /**
     * @test
     */
    public function proofTheOutputFromAddition()
    {
        $result = $this->businessLogic->calculateValue(10, 5, '+');
        self::assertSame($this->mockTest->proofTheOutputFromMockAddition($this->firstNumber, $this->secondNumber), $result);
    }

    /**
     * @test
     */
    public function proofTheOutputFromSubtraction()
    {
        $result = $this->businessLogic->calculateValue(10, 5, '-');
        self::assertSame($this->mockTest->proofTheOutputFromMockSubtraction($this->firstNumber, $this->secondNumber), $result);
    }

    /**
     * @test
     */
    public function proofTheOutputFromMultiply()
    {
        $result = $this->businessLogic->calculateValue(10, 5, '*');
        self::assertSame($this->mockTest->proofTheOutputFromMockMultiply($this->firstNumber, $this->secondNumber), $result);
    }

    /**
     * @test
     */
    public function proofTheOutputFromDivision()
    {
        $result = $this->businessLogic->calculateValue(10, 5, '/');
        self::assertSame($this->mockTest->proofTheOutputFromMockDivision($this->firstNumber, $this->secondNumber), $result);
    }

    /**
     * @test
     */
    public function proofTheOutputFromFalseDivision()
    {
        self::expectException(InvalidArgumentException::class);
        self::expectExceptionMessage('know this operator');
        self::expectExceptionCode(1571047500);
        $this->businessLogic->calculateValue($this->firstNumber, $this->secondNumber, '#');
    }

}