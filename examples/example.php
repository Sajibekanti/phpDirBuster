<?php
include '../vendor/autoload.php';

use MattiaBLX\phpDirBuster;
$dirBuster = new dirBuster;
$result = $dirBuster->Buster();
var_dump($result);
