<?php

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

require __DIR__.'../../vendor/autoload.php';

$hashids = new Hashids\Hashids(
    'VMS^@?%M-agD9$2e',
    '10'
);

echo $hashids->encode(1);
