<?php

/*
 Exercise 2 - Literal date parsing



/*
Create a function taking a description of a date, and returning the actual date in the "YYYY-mm-dd" format.



Example:

"The first Monday of October 2019" => "2019-10-07"

"The third Tuesday of October 2019" => "2019-10-15"

"The last Wednesday of October 2019" => "2019-10-30"



The descriptors you are expected to support are: first, second, third, fourth, fifth, last.

Using strtotime($string), look at documentation for relative dates.
strip out all unneeded words.
so '(first..last) Day of Month Year'.

Assume all input is parseable.  If not, strtotime defaults to .

*/

namespace App;

class DateParseClass
{
    private $regex = '/(first|second|third|fourth|fifth|last)\s+(\w+)\s+(of)\s+(\w+)\s+(\w+)/';

    public function DateParse(string $input): ?string
    {

        $output = array();
        preg_match($this->regex, strtolower($input), $output);
        if ($output) {
            return date('Y-m-d',strtotime($output[0]));
        }
        else return null;
    }
}
