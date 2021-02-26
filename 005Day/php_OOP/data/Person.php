<?php

class Person
{
    const AUTHOR = "Data Diri Anda : ";

    var string $Name;
    var ?string $Address = null;
    var string $Country = "Indonesia";

    function sayHello(?string $Name)
    {
        if (is_null($Name)){
            echo "Hi, My name is $this->Name" . PHP_EOL;
        }else{
            ame is $this->Name" . PHP_EOL;   echo "Hi $Name, My n
        }
    }


    function Info()
    {
        echo "Author : " . self::AUTHOR . PHP_EOL;
    }
}