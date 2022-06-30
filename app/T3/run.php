<?php

require 'StringMergeClass.php';

if (isset($argv[1]) && isset($argv[2])) {
    $StringMerge = new App\StringMergeClass($argv[1],$argv[2]);
    print ($StringMerge->StringMerge());
}