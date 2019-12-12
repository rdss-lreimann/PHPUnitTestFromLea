<?php

namespace Lea\PHPUnit\Arithmetician\Test;

use Lea\PHPUnit\Arithmetician\BusinessLogic;
use Lea\PHPUnit\Arithmetician\Execute;
use Mockery;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;

class ExecuteTest extends TestCase
{
    /** @var Execute $subject */
    private $subject;
    /** @var BusinessLogic|MockInterface $mockedBusinessLogic */
    private $mockedBusinessLogic;

    protected function setUp(): void
    {
        $this->mockedBusinessLogic = Mockery::mock(BusinessLogic::class);
        $this->subject = new Execute($this->mockedBusinessLogic);
    }

    /**
     * @test
     */
    public function classExist()
    {
        self::assertInstanceOf(Execute::class, $this->subject);
    }

    /**
     * @test
     */
    public function calculateAllExist()
    {
        $this->mockedBusinessLogic->shouldReceive('calculateValue')->once()->with(12, 12, '+')->andReturn(24);
        $result = $this->subject->calculateAll(12, 12, '+');
        self::assertNotFalse($result);

    }

    /**
     * @test
     */
    public function runExist()
    {
        $this->mockedBusinessLogic->shouldReceive('calculateValue')->once()->with(12, 12, '+')->andReturn(24);
        $result = $this->subject->run(12, 12, '+');
        self::assertNotFalse($result);
    }

    /**
     * @test
     */
    public function outputIsNumeric()
    {
        $this->mockedBusinessLogic->shouldReceive('calculateValue')->once()->with(12, 12, '+')->andReturn(24);
        $result = $this->subject->calculateAll(12, 12, '+');
        self::assertIsNumeric($result);
    }
}
