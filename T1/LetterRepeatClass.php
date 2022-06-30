<?php

/*
 * Exercise 1 - Words without any repeating letters


Create a function that returns TRUE if a word does not have any repeating letter.

Examples of valid words:

documentarily
aftershock
countryside
six-year-old


Examples of invalid words:

Double-down
Euclidean
epidemic


The function must be in a dedicated class and must be fully unit tested.

Tests
Input must be string
Valid Output - Return TRUE if correct input
Incorrect Output - Return FALSE if incorrect input

Convert to lowerspace, remove all non-alphabetical characters.
insert into associative array key value pair of [char => boolean].
If key value pair exists for letters, invalid word.

PHP returns 1 if TRUE, empty if FALSE

*/

namespace Exercise;

class LetterRepeatClass
{
    public function LetterRepeat(string $input): bool
    {
        $word = (strtolower($input));
        $chararray = str_split(preg_replace('/[^a-z]/','',$word));
        $array = array();
        foreach ($chararray as $char) {
            if (isset($array[$char])) {
                return FALSE;
            }
            else {
                $array[$char] = TRUE;
            }
        }
        return TRUE;
    }
}
