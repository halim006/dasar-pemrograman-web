<?php

for ($a =1; $a <= 100; $a++){
    if ($a %2 == 0){
        continue;
    }
    echo "counter : " . $a . PHP_EOL;
}