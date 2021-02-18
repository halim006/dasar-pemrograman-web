<?php

$nilai = "0";

switch ($nilai){
    case "A":
        echo "anda lulus dengan baik" . PHP_EOL;
        break;
    case "B":
        echo "anda lulus" . PHP_EOL;
        break;
    case "C":
        echo "anda lulus" . PHP_EOL;
        break;
    case "0":
        echo  "anda tidak lulus" . PHP_EOL;
        break;
    default:
        echo "mungkin anda salah jurusan" . PHP_EOL;
}

//alternatif syntax
switch ($nilai):
    case "A":
        echo "anda lulus dengan baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "anda lulus" . PHP_EOL;
        break;
    case "0":
        echo  "anda tidak lulus" . PHP_EOL;
        break;
    default:
        echo "mungkin anda salah jurusan" . PHP_EOL;
endswitch;