<?php

require 'DateParseClass.php';

$DateParse = new App\DateParseClass();

if ($argv[1]) {
    print ($DateParse->DateParse($argv[1]));
}