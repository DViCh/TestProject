<?php

/*
Exercise 3 - String merge



Write a PHP function that merges two, character by character.

E.g : "MICHAEL", "JORDAN" = "MJIOCRHDAAENL"



The function must be in a dedicated class and must be fully unit tested.

Tests
Correct inputs
Correct output

Compute size of string values.
Concat merged string while looping through char array index values.
Assume all strings are valid.

*/
namespace App;

class StringMergeClass
{
    private $maxlen = 0;
    private $str1;
    private $str2;

    public function __construct(string $str1, string $str2) //Return size of larger string.
    {
        $len1 = strlen($str1);
        $len2 = strlen($str2);
        $this->str1 = $str1;
        $this->str2 = $str2;
        $this->maxlen = ($len1 > $len2) ? $len1 : $len2;
    }

    public function StringMerge(): string
    {
        $array1 = str_split($this->str1);
        $array2 = str_split($this->str2);
        $mergestring = "";

        for ($x = 0; $x<= $this->maxlen; $x++) {
            $mergestring .= $this->concatChar($array1,$x).$this->concatChar($array2,$x);
        }

        return $mergestring;
    }

    private function concatChar(array $strarray, int $index): string //concat if valid index value
    {
        return $strarray[$index] ?? '';
    }

}
