<?php

require_once "data/Person.php";

$Person = new Person();
$Person->Name = "Halim";
$Person->Address = "Cimahi";

echo Person::AUTHOR . PHP_EOL;
echo "name : $Person->Name" . PHP_EOL;
echo "Addres : $Person->Address" . PHP_EOL;
echo "Country :  $Person->Country" . PHP_EOL;

$Person1 = new Person();
$Person1->Name = "dadan";
$Person1->Address = null;
$Person1->Country = "Paris";

var_dump($Person1);