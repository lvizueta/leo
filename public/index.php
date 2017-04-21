<?php

require_once '../vendor/autoload.php';

echo "Hello World";

use Medoo\Medoo;

$database = new Medoo([ 
    'database_type'=>'sqlite', 
    'database_file'=>'../storage/database.db'
    ]);