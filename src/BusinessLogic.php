<?php

namespace Lea\PHPUnit\Arithmetician;

use InvalidArgumentException;

class BusinessLogic
{
    /** @var Calculator $calculator */
    private $calculator;

    /** @param Calculator $calculator */
    public function __construct(Calculator $calculator)
    {
        $this->calculator = $calculator;
    }

    /** Throw an Exception when the param is not a number
     * @param mixed $value
     */
    protected function parameterIsANumber($value)
    {
        if (preg_match_all('/\D/', $value)) {
            throw new InvalidArgumentException( $value. ' is not a number' , 1571045675);
        }
    }

    /**
     * Compare the operator and return the result from calculator, ore thrown an error
     * @param mixed $firstNumber
     * @param mixed $secondNumber
     * @param string $operator
     * @return float|int|null
     */
    public function calculateValue($firstNumber, $secondNumber, $operator)
    {
        $this->parameterIsANumber($firstNumber);
        $this->parameterIsANumber($secondNumber);
        $result = null;

        switch ($operator) {
            case '+':
                $result = $this->calculator->add($firstNumber, $secondNumber);
                break;

            case '-':
                $result = $this->calculator->subtract($firstNumber, $secondNumber);
                break;

            case '*':
                $result = $this->calculator->multiply($firstNumber, $secondNumber);
                break;

            case '/':
                $result = $this->calculator->divide($firstNumber, $secondNumber);
                break;

            default:
                throw new InvalidArgumentException('I dont know this operator: "' .$operator . '"' , 1571047500);
        }
        return $result;
    }

}
