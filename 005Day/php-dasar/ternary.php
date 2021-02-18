<?php

$gender = "pria";
$hi = null;

$hi = $gender == "pria" ? "hi broo!!" : "hi nona!!";

echo $hi . PHP_EOL;

if($hi = $gender== "pria"){
    echo "hi broo";
}else{
    echo "hi nona";
}