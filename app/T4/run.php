<?php

require 'SuperDigitClass.php';

if (isset($argv[1])) {
    $SuperDigit = new App\SuperDigitClass($argv[1]);
    print ($SuperDigit->SuperDigit());
}