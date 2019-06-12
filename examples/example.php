<?php

include '../vendor/autoload.php';

$dirBuster = new dirBuster();
$result = $dirBuster->buster();
var_dump($result);
