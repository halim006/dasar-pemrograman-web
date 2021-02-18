<?php

$sayhello = function(string $name){
    echo "hello $name" . PHP_EOL;
};

$sayhello("eko");
$sayhello("budi");

//sebagai argument
function sayGodBye(string $name, $string){
    $finalname = $filter($name);
    echo "good Bye $finalname" . PHP_EOL;
}
$sayhello("eko", function (string  $name): string{
    return strtoupper($name);
});

$filterFunction = function (string  $name): string{
    return strtoupper($name);
};
$sayhello("eko", $filterFunction);


//mengakses variable luar
$firstname = "eko";
$lastname = "kendy";

$sayhelloEko = "kendy";

$sayhelloEko = function () use ($firstname, $lastname){
    echo "hello $firstname $lastname" . PHP_EOL;
};

$sayhelloEko();