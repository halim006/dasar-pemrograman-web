<?php

goto a;
echo "hello World" . PHP_EOL;

a:
echo  "hello A" . PHP_EOL;


$a = 1;

while  (true){
    echo "hello while loop : " . $a . PHP_EOL;
    $a++;

    if ($a > 10){
        goto    end;
    }
}

end:
echo "end loop";