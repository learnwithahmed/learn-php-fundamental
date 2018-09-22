<?php

 /*
  Arithmetic operators: are used with numeric values to perform common 
  mathematical operations such as addition, subtraction, multiplication etc.
  Here's a complete list of PHP's arithmetic operators:

    | Operator |    Description   |   Example  |         Result        |
    | -------- | ---------------- | ---------- | --------------------- |
    |     +   |   Addition        |  $x + $y  |    Sum of $x and $y
    |     -   |   Subtraction     |  $x - $y  |    Difference of $x and $y.
    |     *   |   Multiplication  |  $x * $y  |    Product of $x and $y.
    |     /   |   Division        |  $x / $y  |    Quotient of $x and $y
    |     %   |   Modulus         |  $x % $y  |    Remainder of $x divided by $y
  */

use PHPUnit\Framework\TestCase;

class ArithmeticTest extends TestCase
{
  /**
   * A basic Arithmetic Test example.
   *
   * @return void
   */
    public function testBasicArithmeticTest()
    {
        // Arithmetic operators | معاملات حسابية

        # Addition
        $this->assertSame(3 + 2, 5);
        # Subtraction
        $this->assertSame(3 - 2, 1);
        # Multiplication
        $this->assertSame(3 * 2, 6);
        # Division
        $this->assertSame(10 / 2, 5);
        # Modulus
        $this->assertSame(5 % 3, 2);
        # Exponentiation
        $this->assertSame(5 ** 3, 125);
    }
}