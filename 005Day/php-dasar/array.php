<?php
$values = array(1, 2, 3, 1.4);
var_dump($values);

$name = ["eko", "kurniawan", "kanedi"];
var_dump($name);

//mengubah data array
var_dump($name[0]);
$name[0] = "budi";
var_dump($name);

//mengapus data array
unset($name[1]);
var_dump($name);

//menambahkan data array
$name[] = "joko";
var_dump($name);
var_dump(count($name));

//array sebagai map
$eko = array(
    "id" => "eko",
    "name" => "eko kurniawan",
    "age" =>  "30"
);
var_dump($eko);

var_dump($eko["age"]);

//array dalam array

$eko = array(
    "id" => "eko",
    "name" => "eko kurniawan",
    "age" =>  "30"
    "addres" => [
        "city" =>   "jakarta",
        "country" =>    "indonesia"
]
);
var_dump($eko);

var_dump($eko["name"]);
var_dump($eko["addres"]["country"]);