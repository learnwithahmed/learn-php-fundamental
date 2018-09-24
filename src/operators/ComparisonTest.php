<?php

 /*
    Comparison operators are used to compare two values in a Boolean fashion.

    |     Operator  |    Description                            |   Example          Result              
    | ------------- | ----------------------------------------- | ------------ | --------------------------
    |   ==          |   Equal - يساوي                            |  $x == $y    | True if $x is equal to $y - التعبير صحيح اذا قيمه اكس تساوي قيمة واي 
    |   ===         |   Identical	- مطابق بالبقيمة والنوع              |  $x === $y   | True if $x is equal to $y, and they are of the same type - التعبير صحيح اذا المتغيرين تساوي بالقيمة والنوع
    |   !=          |   Not equal - لايساوي                       |  $x != $y    | True if $x is not equal to $y - التعبير صحيح اذا قيمه اكس لا تساوي قيمة واي
    |   <>          |   Not equal - لايساوي	                      |  $x <> $y    | True if $x is not equal to $y - التعبير صحيح اذا قيمه اكس لا تساوي قيمة واي
    |   !==         |   Not identical = غير مطابق لابالقيمة ولابالنوع     |  $x !== $y   | True if $x is not equal to $y, or they are not of the same type - التعبير غير صحيح اذا كس و واي لاتساوي لابالقيمة ولا بالنوع
    |   <           |   Less than	= اقل من                       |  $x < $y     | True if $x is less than $y - التعبير صحيح اذا قيمه اكس اقل من قيمة واي
    |   >           |   Greater than	= اكبر من                  |  $x > $y      | True if $x is greater than $y - التعبير صحيح اذا قيمه اكس اكبر من قيمة واي
    |   >=          |   Greater than or equal to = اكبر او يساوي 	|  $x >= $y     | True if $x is greater than or equal to $y - التعبير صحيح اذا قيمه اكس اكبر من او تساوي قيمة واي
    |   <=          |   Less than or equal to	= اقل او يساوي     |  $x <= $y      | True if $x is less than or equal to $y - التعبير صحيح اذا قيمه اكس اقل من او تساوي قيمة واي
  */

use PHPUnit\Framework\TestCase;

class ComparisonTest extends TestCase
{
  /**
   * A basic Comparison Test example.
   *
   * @return void
   */
    public function testBasicComparisonTest()
    {
        // Comparison operators | معاملات المقارنة

        $number = 10;

        # 1- Equal
        $this->assertTrue($number == 10);

        # 2- Identical
        $this->assertTrue($number === 10);
        $this->assertFalse($number === '10'); // comparing same value in int with string, gives false

        # 3- Not equal
        $this->assertTrue($number != 7);

        # 4- Not equal
        $this->assertTrue($number <> 7);

        # 5- Not Identical
        $this->assertTrue($number !== 7);
        $this->assertTrue($number !== '10'); // comparing same value in int with string, gives true

        # 6- Greater than
        $this->assertTrue($number > 7);

        # 7- Less than
        $this->assertFalse($number < 7);

        # 8- Greater than or equal to
        $this->assertTrue($number >= 7);

        # 5- Less than or equal to
        $this->assertFalse($number <= 7);

    }
}