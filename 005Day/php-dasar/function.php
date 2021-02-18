<?php

function    sayhello(){
    echo "hello Function" . PHP_EOL;
}


sayhello();

//ke-2
$buat = true;
if ($buat){
    function sayhello(){
        echo "hello Function" . PHP_EOL;
    }
}