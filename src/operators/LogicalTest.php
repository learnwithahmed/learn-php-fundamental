<?php

 /*
    Logical operators are used to combine conditional statements..

    |     Operator  |    Name          |   Example    |      Result              
    | ------------- | ---------------- | ------------ | ------------------------------
    |     and       |   And            |  $x and $y   | True if both $x and $y are true 
    |     or        |   Or             |  $x or $y    | True if either $x or $y is true
    |     xor       |   Xor            |  $x xor $y   | True if either $x or $y is true, but not both
    |      &&       |   And	           |  $x && $y    | True if both $x and $y are true
    |      ||       |   Or             |   $x || $y   | True if either $$x or $y is true
    |      !	      |   Not            |   !$x        | True if $x is not true
  */

use PHPUnit\Framework\TestCase;

class LogicalTest extends TestCase
{
  /**
   * A basic Logical Test example.
   *
   * @return void
   */
    public function testBasicLogicalTest()
    {
        // Logical operators | معاملات المنطقية

        $firstNumber = 10;
        $secondNumber = 20;

        # 1- and / &&
        # Returns True if both statements are true.
        $this->assertTrue($firstNumber > 0 and $secondNumber <= 20); 

        # 2- or / ||
        # Returns True if one of the statements is true
        $this->assertTrue($firstNumber > 3 and $secondNumber < 30); 

        # 3- ! (not)
        # Reverse the result, returns False if the result is true.
        $this->assertFalse($firstNumber == $secondNumber);
        $this->assertTrue($firstNumber != $secondNumber);
    }
}