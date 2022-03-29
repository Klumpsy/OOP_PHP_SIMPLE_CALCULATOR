<?php

class Calc { 
    private $firstNumber;
    private $secondNumber;
    private $operator;
   
    public function __construct(int $numberOne, int $numberTwo, string $operator) { 
        $this->firstNumber = $numberOne;
        $this->secondNumber = $numberTwo; 
        $this->operator = $operator; 
    }
    
    public function calculate() { 
        switch($this->operator) { 
            case $this->operator = "+":
                return $this->firstNumber + $this->secondNumber; 
                break; 
            case $this->operator = "-":
                return $this->firstNumber - $this->secondNumber; 
                break; 
            case $this->operator = "*":
                return $this->firstNumber * $this->secondNumber; 
                break; 
            case $this->operator = "/":
                return $this->firstNumber / $this->secondNumber; 
                break;
            default: 
                echo "Error with Calculate method";
                break;
        }
    }
}