<?php

use App\LetterRepeatClass;

require 'app/T1/LetterRepeatClass.php';

class LetterRepeatTest extends PHPUnit\Framework\TestCase
{

    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    public function testLetterRepeatNoInput() // Case with no input - ArgumentCountError.
    {
        $LetterRepeat = new LetterRepeatClass();
        $this->expectException(ArgumentCountError::class);
        $output = $LetterRepeat->LetterRepeat();
    }

    public function testLetterRepeatInvalidInput() // Case with valid input - TypeError
    {
        $LetterRepeat = new LetterRepeatClass();
        $this->expectException(TypeError::class);
        $output = $LetterRepeat->LetterRepeat(array());
    }

    public function testLetterRepeatnullInput() // Failure Case with empty string
    {
        $LetterRepeat = new LetterRepeatClass();
        $this->expectException(TypeError::class);
        $output = $LetterRepeat->LetterRepeat(null);
    }

    public function testLetterRepeatEmptyInput() // Failure Case with empty string
    {
        $LetterRepeat = new LetterRepeatClass();
        $output = $LetterRepeat->LetterRepeat("");
        $this->assertEmpty($output);
    }

    public function testLetterRepeatSuccess() // Base Success Case
    {
        $LetterRepeat = new LetterRepeatClass();
        $output = $LetterRepeat->LetterRepeat("works");
        $this->assertEquals(1,$output);
    }

    public function testLetterRepeatFail() // Base Failure Case
    {
        $LetterRepeat = new LetterRepeatClass();
        $output = $LetterRepeat->LetterRepeat("test");
        $this->assertEmpty($output);
    }

    public function testLetterRepeatDoubleDashSuccess() // Success Case with duplicate non-letters
    {
        $LetterRepeat = new LetterRepeatClass();
        $output = $LetterRepeat->LetterRepeat("six-year-old");
        $this->assertEquals(1,$output);
    }

    public function testLetterRepeatNoLetterFail() // Failure Case with no letters.
    {
        $LetterRepeat = new LetterRepeatClass();
        $output = $LetterRepeat->LetterRepeat("123");
        $this->assertEmpty($output);
    }

    public function testLetterRepeatDoubleNumbersSuccess() // Success Case with duplicate numbers
    {
        $LetterRepeat = new LetterRepeatClass();
        $output = $LetterRepeat->LetterRepeat("11a");
        $this->assertEquals(1,$output);
    }

    public function testLetterRepeatDoubleLettersAndNumbersFail() // Failure Case with duplicate letters and numbers
    {
        $LetterRepeat = new LetterRepeatClass();
        $output = $LetterRepeat->LetterRepeat("11aab");
        $this->assertEmpty($output);
    }

}
