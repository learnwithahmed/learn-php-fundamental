<?php

 /*
    Assignment operators are used to assign values to variables.

    | Operator |            Description            |   Example  |         Result        |
    | -------- | --------------------------------  | ---------- | --------------------- |
    |    =     |   Assign                          |  $x = $y   |    $x = $y
    |    +=    |   Add and assign	                 |  $x += $y  |    $x = $x + $y
    |    -=    |   Subtract and assign	           |  $x -= $y  |    $x = $x - $y
    |    *=    |   Multiply and assign	           |  $x *= $y  |    $x = $x * $y
    |    /=    |   Divide and assign quotient	     |  $x /= $y  |    $x = $x / $y
    |    %=    |   Divide and assign modulus	     |  $x %= $y  |    $x = $x % $y
  */

use PHPUnit\Framework\TestCase;

class AssignmentTest extends TestCase
{
  /**
   * A basic Assignment Test example.
   *
   * @return void
   */
    public function testBasicAssignmentTest()
    {
        // Assignment operators | معاملات التخصيص

        # Assignment: =
        $value = 5;
        $this->assertSame($value, 5);

        # Multiple assignment.
        # Both variables firstVariable and secondVariable simultaneously get the same value
        $firstVariable = $secondVariable = 20;
        $this->assertSame($first_variable2, $second_variable);

        # You can switch variable values using multiple assignment.
        $firstVariable = $secondVariable = $value;
        # is equivalent to
        $secondVariable = $value;
        $firstVariable = $secondVariable;
        $this->assertSame($secondVariable, $value);

        # Assignment operator combined with Arithmetic and Bitwise operators
        
        # Assignment +=
        $number = 10;
        $number += 3;
        $this->assertSame($number, 13);

        # Assignment *=
        $number = 5;
        $number *= 3;
        $this->assertSame($number, 15);

        # Assignment: /=
        $number = 8;
        $number /= 4;
        $this->assertSame($number, 2);

        # Assignment: %=
        $number = 8;
        $number %= 3;
        $this->assertSame($number, 2);

        # Assignment: **=
        $number = 5;
        $number **= 3;
        $this->assertSame($number, 125);


        # Assignment: &=
        $number = 5;  # 0b0101
        $number &= 3;  # 0b0011
        $this->assertSame($number, 1); # 0b0001


        # Assignment: |=
        $number = 5;  # 0b0101
        $number |= 3;  # 0b0011
        $this->assertSame($number, 7); # 0b0111


        # Assignment: ^=
        $number = 5;  # 0b0101
        $number ^= 3;  # 0b0011
        $this->assertSame($number, 6); # 0b0110


        # Assignment: >>=
        $number = 5;
        $number >>= 3;
        $this->assertSame($number, 0); # (((5 // 2) // 2) // 2)


        # Assignment: <<=
        $number = 5;
        $number <<= 3;
        $this->assertSame($number, 40); # 5 * 2 * 2 * 2


    }
}