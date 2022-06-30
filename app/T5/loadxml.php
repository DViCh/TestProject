<?php

require 'XMLImportClass.php';

$xmlclass = new App\XMLImportClass();

if (file_exists($argv[1]) && pathinfo($argv[1])['extension'] == 'xml') {
    print_r ($xmlclass->XMLImport($argv[1]));
}
