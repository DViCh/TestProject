<?php

require 'LetterRepeatClass.php';

$LetterRepeat = new App\LetterRepeatClass();


if (isset($argv[1])) {
    print ($LetterRepeat->LetterRepeat($argv[1]));
}