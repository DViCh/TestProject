<?php

/*
Exercise 4 - Super-digit



Given a positive integer, compute the sum of each individual digit. If the resulting value is a single-digit number, return that number, otherwise repeat the operation until a single-digit number is reached.



For example:



4 --> 4

18 --> 1 + 8 = 9

258 --> 2 + 5 + 8 = 15 --> 1 + 5 = 6



The function must be in a dedicated class and must be fully unit tested.

Tests
Valid Input (Positive Number)
Valid Output

Initialize superdigit
While superdigit greater than 9, split superdigit digits and add the sum.

*/

namespace App;

class SuperDigitClass
{
    private $superdigit = 0;

    public function __construct(int $num) { // Initialise original number.
        $this->superdigit = $num;
    }

    public function SuperDigit(): int
    {
        if ($this->superdigit < 0) {
            return $this->superdigit;
        }

        $input = $this->superdigit;
        while ($this->superdigit >= 10) { // Call Private function to add digits while superdigit > 10
            $this->sumdigit($this->superdigit);
        }

        return $this->superdigit;
    }

    private function SumDigit()
    {
        $newdigit = 0;
        foreach (str_split($this->superdigit) as $digit) {
            $newdigit += (int) $digit;
        }
        $this->superdigit = $newdigit;
    }

}
