<?php

 /*
    Bitwise operators are used to evaluate and manipulate of specific bits within an integer.

    |     Operator  |    Description            |   Result                        
    | ------------- | ------------------------- | -------------------------------
    |   $a & $b     |   And                     |  Bits that are set in both $a and $b are set.
    |   $a | $b     |   Or (inclusive or)	      |  Bits that are set in either $a or $b are set.
    |   $a ^ $b     |   Xor (exclusive or)      |  Bits that are set in $a or $b but not both are set.
    |   ~ $a        |   Not	                    |  Bits that are set in $a are not set, and vice versa.
    |   $a << $b    |   Shift left              |  Shift the bits of $a $b steps to the left (each step means "multiply by two")
    |   $a >> $b    |   Shift right	            |  Shift the bits of $a $b steps to the right (each step means "divide by two")
  */

use PHPUnit\Framework\TestCase;

class BitwiseTest extends TestCase
{
  /**
   * A basic Bitwise Test example.
   *
   * @return void
   */
    public function testBasicBitwiseTest()
    {
        // Bitwise operators | معاملات البت

        # 1- AND
        # This operator match compare two numbers in bit and sets each bit to 1 
        # if both bits are 1. for example:
        # 5 = 0b0101
        # 3 = 0b0011
        $this->assertSame(5 & 3, 1); # 0b0001


        # 2- OR
        # This operator match compare two numbers in bit and sets each bit to 1 
        # if of two bits is 1. for example:
        # 5 = 0b0101
        # 3 = 0b0011
        $this->assertSame(5 | 3, 7); # 0b0001


        # 3- NOT
        # This operator match compare two numbers in bit and Inverts all the bits. 
        # for example:
        $this->assertSame(~5, -6);


        # 4- XOR
        # This operator match compare two numbers in bit and sets each bit to 1 
        # if only one of two bits is 1. for example:
        
        $number = 5;  # 0b0101
        $number ^= 3;  # 0b0011
        $this->assertSame(5 ^ 3, 6); # 0b0110


        # 5- Signed right shift
        # This operator shift right by pushing copies of the leftmost bit in 
        # from the left, and let the rightmost bits fall off. for example:
        
        $this->assertSame(5 >> 1, 2); # 0b0010
        $this->assertSame(5 >> 2, 1); # 0b0001

        # 6- Zero fill left shift
        # This operator shift left by pushing zeros in from the right and 
        # let the leftmost bits fall off. for example:
        
        $this->assertSame(5 << 1, 10); # 0b1010
        $this->assertSame(5 << 2, 20); # 0b10100

    }
}