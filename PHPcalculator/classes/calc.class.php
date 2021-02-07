<?php
class Calc
{
    public $operator;
    public $num1;
    public $num2;

    public function __construct(string $operator, int $num1, int $num2)
    {
        $this->operator = $operator;
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function calculate()
    {
        switch ($this->operator) {
            case 'add':
                return $this->num1 + $this->num2;
                break;
            case 'subtract':
                return $this->num1 - $this->num2;
                break;
            case 'multiply':
                return $this->num1 * $this->num2;
                break;
            case 'divide':
                return $this->num1 / $this->num2;
                break;
            default:
                echo "Error!";
                break;
        }
    }
}
