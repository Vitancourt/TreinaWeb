<?php

require __DIR__.'../vendor/autoload.php';
require __DIR__.'/config.php';

use Illuminate\Database\Capsule\Manager as DB;

$produtos = DB::table('produtos')
        ->get();

$produto4 = DB::table('produtos')
        ->where('id', 4)
        ->get();
