<?php
$a = 1;

while  (true){
    echo "hello while loop : " . $a . PHP_EOL;
    $a++;

    if ($a > 10){
        break;
    }
}

