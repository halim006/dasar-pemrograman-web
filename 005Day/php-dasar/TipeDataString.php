<?php
//cara 1
echo 'halim sumbogo';
echo "\n";

//cara 2
echo "halim\t sumbogo\n";

//cara 3
echo <<<EKO
selamat belajar
sekarang, kita belajar tipe data string
ini adalah cara ke-3 membuat string
bisa menggunakan heredoc

//cara 4
EKO;
echo <<<'EKO'
selamat belajar
sekarang, kita belajar tipe data string
ini adalah cara ke-3 membuat string
bisa menggunakan heredoc

EKO;
