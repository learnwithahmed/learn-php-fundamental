<?php

 /*
    String operators are used specifically for concatenating one or more strings.

    |     Operator  | Description           |   Example         |  Result              
    | ------------- | --------------------- | ----------------- | ------------------------------
    |     .         |  Concatenation        |  $text1 . $text2  | Combines both texts
    |     .=        |  Concatenation Append |  $text1 .= $text2 | Appends $text1 to $text2

  */

use PHPUnit\Framework\TestCase;

class StringTest extends TestCase
{
  /**
   * A basic String Test example.
   *
   * @return void
   */
    public function testBasicStringTest()
    {
        // String operators | معاملات النصية

        # 1. Concatenation .
        $text1 = 'Hello ';
        $text2 = $text1 . 'World!';

        $this->assertSame($text2, 'Hello World!');
        
        # 2. Concatenation Assignment .=
        $text = 'Hello ';
        $text .= 'World!';

        $this->assertSame($text, 'Hello World!');
    }
}