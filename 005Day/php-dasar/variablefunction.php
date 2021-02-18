<?php

function sayhello(string  $name, $filter){
    $finalname = $filter($name);
    echo "hello $finalname" . PHP_EOL;
}

function sampleFunction(string  $name): string{
    return "sample $name";
}

sayhello("eko", "sampleFunction");
sayhello("eko", "strtoupper");
sayhello("eko", "strtolower");
