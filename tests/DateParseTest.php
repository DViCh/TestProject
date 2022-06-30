<?php

use App\DateParseClass;

require 'app/T2/DateParseClass.php';

class DateParseTest extends PHPUnit\Framework\TestCase
{

    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    public function testDateParseNoInput() // Case with no input - ArgumentCountError.
    {
        $DateParse = new DateParseClass();
        $this->expectException(ArgumentCountError::class);
        $output = $DateParse->DateParse();
    }

    public function testDateParseIncorrectOutput() // Is null if strtotime returns false.
    {
        $DateParse = new DateParseClass();
        $output = $DateParse->DateParse("123");
        $this->assertnull($output);
    }

    public function testDateParseCorrectOutput() // Assert correct output is string from strtotime() output;
    {
        $DateParse = new DateParseClass();
        $output = $DateParse->DateParse("Last Monday of October 2021");
        $this->assertIsString($output);
    }


}
