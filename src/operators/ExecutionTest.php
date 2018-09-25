<?php

 /*
    Backticks (``) are used as Execution Operator in PHP.
    (``) تدعم لغة بي اج بي عامل تنفيذ واحد وهو العلامة
    وتسترجع الناتج فقط shell تستخدم لتنفيذ ما هو مكتوب ضمن هذه العلامتين على أنّه من أوامر
  
  */

use PHPUnit\Framework\TestCase;

class ExecutionTest extends TestCase
{
  /**
   * A basic Execution Test example.
   *
   * @return void
   */
    public function testBasicExecutionTest()
    {
        # Execution operator | معامل التنفيذ

        # 1. Backticks (``)
        $command = `ls -ltr`; # you can try any command you wish like: git status ;)
        echo $command;
        $this->assertEmpty(!$command);
        
    }
}