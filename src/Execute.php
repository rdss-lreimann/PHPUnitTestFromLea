<?php

namespace Lea\PHPUnit\Arithmetician;

use InvalidArgumentException;

class Execute
{
    private $businessLogic;
    private $result;

    public function __construct(BusinessLogic $businessLogic)
    {
        $this->businessLogic = $businessLogic;
    }

    public function run($firstNumber, $secondNumber, $operator)
    {
        try {
            $this->calculateAll($firstNumber, $secondNumber, $operator);
        } catch (InvalidArgumentException $exception) {
            print "\n".'This was not correct. '. $exception->getMessage();
        }
    }

    public function calculateAll($firstNumber, $secondNumber, $operator)
    {
        $this->result = $this->businessLogic->calculateValue($firstNumber, $secondNumber, $operator);

        print 'Your result is: ' . $this->result . "\n";
        return $this->result;
    }
}
