<?php

 /*
    PHP is completely object oriented, and not "statically typed" Language. Variables are used to 
    store data, like string of text, numbers, etc. Variable values 
    can change over the course of a script. Here're some important things to know about variables:
    - In PHP, a variable does not need to be declared before adding a value to it. PHP automatically 
      converts the variable to the correct data type, depending on its value.
    - After declaring a variable it can be reused throughout the code.
    - The assignment operator (=) used to assign value to a variable.
    
    Rules for PHP variables:
    - All variables in PHP start with a $ sign, followed by the name of the variable.
    - A variable name must start with a letter or the underscore character _.
    - A variable name cannot start with a number.
    - A variable name in PHP can only contain alpha-numeric characters and    underscores (A-z, 0-9, and _).
    - A variable name cannot contain spaces.
  */

use PHPUnit\Framework\TestCase;

class VariablesTest extends TestCase
{
    public function testingVariables()
    {
        // Declaring variables | تعريف المتغيرات
        $integerVariable = 10;
        $stringVariable = 'Ahmed';

        $this->assertEquals(10, $integerVariable);
        $this->assertEquals('Ahmed', $stringVariable);
    }
}