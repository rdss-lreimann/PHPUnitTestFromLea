<?php

namespace Lea\PHPUnit\Arithmetician;

use Throwable;

class Execute
{
    /** @var BusinessLogic $businessLogic */
    private $businessLogic;

    /** @param BusinessLogic $businessLogic */
    public function __construct(BusinessLogic $businessLogic)
    {
        $this->businessLogic = $businessLogic;
    }

// @codeCoverageIgnoreStart

    /**
     * Set my own exception handling.
     * @param Throwable $exception
     */
    public function exception_handler(Throwable $exception): void
    {
        echo "\n", 'This was not correct. ', $exception->getMessage() . ' ', $exception->getCode() , PHP_EOL;
    }
// @codeCoverageIgnoreEnd

    /**
     * Set the new exception handler, run the calculateAll function.
     * @param mixed $firstNumber
     * @param mixed $secondNumber
     * @param string $operator
     */
    public function run($firstNumber, $secondNumber, $operator)
    {
        set_exception_handler([$this, 'exception_handler']);
        $this->calculateAll($firstNumber, $secondNumber, $operator);
    }

    /**
     * Print the result to the console
     * @param float|int|null $result
     */
    protected function printResult($result)
    {
        print 'Your result is: ' . $result . "\n";
    }

    /**
     * Run the printResult function and return the result.
     * @param mixed $firstNumber
     * @param mixed $secondNumber
     * @param string $operator
     * @return float|int|null
     */
    public function calculateAll($firstNumber, $secondNumber, $operator)
    {
        $result = $this->businessLogic->calculateValue($firstNumber, $secondNumber, $operator);
        $this->printResult($result);
        return $result;
    }


}
