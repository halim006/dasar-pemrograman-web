<?php

$first ["name_pertama" => "budi"];
$last = [
    "nama_pertama" => "eko",
    "nama_kedua" => "kurniawan"
];

$full = $first + $last;
var_dump();

$a = [
    "nama_pertama" => "eko",
    "nama_kedua" => "kurniawan"
];
$b = [
    "nama_kedua" => "kurniawan"
    "nama_pertama" => "eko",
];
var_dump($a == $b);
var_dump($a === $b);