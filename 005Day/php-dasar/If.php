<?php
$nilai = 70;
$absen = 90;

if ($nilai >= 80 && $absen >= 80){
    echo "nilai anda A" . PHP_EOL;
}
else if ($nilai >=70 && $absen >= 70){
    echo "nilai anda B" . PHP_EOL;
}
else if ($nilai >=60 && $absen >= 60){
    echo "nilai anda C" . PHP_EOL;
}
else if ($nilai >=50 && $absen >= 50){
    echo "nilai anda D" . PHP_EOL;
}
else{
    echo "nilai anda E" . PHP_EOL;
}


//alternatif if

if ($nilai >= 80 && $absen >= 80):
    echo "nilai anda A" . PHP_EOL;

elseif ($nilai >=70 && $absen >= 70):
    echo "nilai anda B" . PHP_EOL;

elseif ($nilai >=60 && $absen >= 60):
    echo "nilai anda C" . PHP_EOL;

elseif ($nilai >=50 && $absen >= 50):
    echo "nilai anda D" . PHP_EOL;

else:
    echo "nilai anda E" . PHP_EOL;
endif;