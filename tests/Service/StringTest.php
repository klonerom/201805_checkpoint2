<?php

use PHPUnit\Framework\TestCase;
use Service\String;

final class StringTest extends TestCase
{
  /**
       * @dataProvider stringsProvider
       */
    public function testHelloWilder(): void
    {
        $this->assertEquals('hello wilder', String::trimer());
    }


    public function stringsProvider()
    {
        return [
            'removing one white space before'  => [' hello wilder'],
            'removing one white space after'  => ['hello wilder '],
            'removing one white space before and after'  => [' hello wilder '],
            'removing two white spaces before'  => ['  hello wilder'],
            'removing three white space after'  => ['hello wilder   '],
            'removing many white spaces after and before'  => ['       hello wilder         '],
        ];
    }
}
