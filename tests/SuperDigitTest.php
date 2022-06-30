<?php

use App\SuperDigitClass;

require 'app/T4/SuperDigitClass.php';

class SuperDigitTest extends PHPUnit\Framework\TestCase
{

    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    public function testSuperDigitNoInput() // Case with no input - ArgumentCountError.
    {

        $this->expectException(ArgumentCountError::class);
        $SuperDigit = new SuperDigitClass();
        $output = $SuperDigit->SuperDigit();
    }


    public function testSuperDigitWrongInput() // Case with wrong input type - TypeError.
    {
        $this->expectException(TypeError::class);
        $SuperDigit = new SuperDigitClass("test");
        $output = $SuperDigit->SuperDigit();
    }


    public function testSuperDigitSuccess() // Base Success Case
    {
        $SuperDigit = new SuperDigitClass(25);
        $output = $SuperDigit->SuperDigit();
        $this->assertEquals(7,$output);
    }

    public function testSuperDigitSmallIntSuccess() // Base Success Case with positiveinteger < 10.
    {
        $SuperDigit = new SuperDigitClass(2);
        $output = $SuperDigit->SuperDigit();
        $this->assertEquals(2,$output);
    }

    public function testSuperDigitNegativeFailure() // Fail Case with negative integer, return input.
    {
        $SuperDigit = new SuperDigitClass(-11);
        $output = $SuperDigit->SuperDigit();
        $this->assertEquals(-11,$output);
    }


    public function testSuperDigitRepeatSumSuccess() // Correct output with multiple rounds of digit sum.
    {
        $SuperDigit = new SuperDigitClass(9991);
        $output = $SuperDigit->SuperDigit();
        $this->assertEquals(1,$output);


    }
    public function testSuperDigitAltOrderSuccess() // Correct output after replacing digit order
    {
        $SuperDigit = new SuperDigitClass(258);
        $output = $SuperDigit->SuperDigit();
        $SuperDigit2 = new SuperDigitClass(852);
        $output2 = $SuperDigit2->SuperDigit();
        $this->assertEquals(6,$output);
        $this->assertEquals($output, $output2);

    }


}
