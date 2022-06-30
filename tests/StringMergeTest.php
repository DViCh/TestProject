<?php

use App\StringMergeClass;

require 'app/T3/StringMergeClass.php';

class StringMergeTest extends PHPUnit\Framework\TestCase
{

    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    public function testStringMergeNoInput() // Case with no input - ArgumentCountError.
    {

        $this->expectException(ArgumentCountError::class);
        $StringMerge = new StringMergeClass();
        $output = $StringMerge->StringMerge();
    }

    public function testStringMergeSuccess() // Correct String Merge
    {
        $StringMerge = new StringMergeClass("apple", "banana");
        $output = $StringMerge->StringMerge();
        $this->assertEquals("abpapnlaena",$output);
    }

    public function testStringMergeSuccessReverseOrder() // Correct String output replacing argument order
    {
        $StringMerge = new StringMergeClass("building","road");
        $output = $StringMerge->StringMerge();
        $StringMerge2 = new StringMergeClass("road","building");
        $output2 = $StringMerge2->StringMerge();
        $this->assertEquals("bruoialdding",$output);
        $this->assertEquals("rbouaidlding",$output2);
        $this->assertEquals(strlen($output),strlen($output2));

    }

    public function testStringMergeWrongInput() // Incorrect input type
    {
        $this->expectException(TypeError::class);
        $StringMerge = new StringMergeClass(array(), array());
        $output = $StringMerge->StringMerge();
    }


}
