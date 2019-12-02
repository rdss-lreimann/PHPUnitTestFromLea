<?php

namespace Lea\PHPUnit\Arithmetician\Test;

use Lea\PHPUnit\Arithmetician\Execute;
use Lea\PHPUnit\Arithmetician\BusinessLogic;
use Mockery;
use PHPUnit\Framework\TestCase;

class ExecuteTest extends TestCase
{
    private $execute;
    private $mockedBusinessLogic;

    protected function setUp(): void
    {
        $this->mockedBusinessLogic = Mockery::mock(BusinessLogic::class);
        $this->execute = new Execute($this->mockedBusinessLogic);
    }

    /**
     * @test
     */
    public function proofIfTheClassExist()
    {
        self::assertInstanceOf(Execute::class, $this->execute);
    }

    /**
     * @test
     */
    public function proofIfTheFunctionExist()
    {
        $this->mockedBusinessLogic->shouldReceive('calculateValue')->once()->with(12, 12, '+')->andReturn(24);
        self::assertNotFalse($this->execute->calculateAll(12,12,'+'));
    }


    /**
     * @test
     */
    public function proofIfTheOutputIsNumeric()
    {
        $this->mockedBusinessLogic->shouldReceive('calculateValue')->once()->with(12, 12, '+')->andReturn(24);
        self::assertIsNumeric($this->execute->calculateAll(12, 12, '+'));
    }
}
