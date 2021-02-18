<?php
$name = "eko kurniawan";
echo "name : " . $name . PHP_EOL;
echo "value : " . 100 . PHP_EOL;

$valueString = (string)100;
var_dump($valueString);

$valueint = (int)"100";
var_dump($valueint);

$valuefloatt = (float)"1.29";
var_dump($valuefloatt);

$name = "eko";
echo $name [0] . PHP_EOL;
echo $name [1] . PHP_EOL;
echo $name [2] . PHP_EOL;

//variable parsing
echo "hello $name, selamat belajar php" . PHP_EOL;

//curly Brace
echo "hello {$name}s, selamat belajar php" . PHP_EOL;
