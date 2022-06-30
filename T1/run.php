<?php

require 'LetterRepeatClass.php';

$LetterRepeat = new LetterRepeatClass();

if (isset($argv[1])) {
    print ($LetterRepeat->LetterRepeat($argv[1]));
}