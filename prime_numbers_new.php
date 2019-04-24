<?php
/*速度重視*/

//引数に指定した秒数処理を実行する
set_time_limit(2);

$i = 2;

while (true) {
    $prime_numbers_flag = true;
    $k = 2;
    while ($k < $i) {
        if ($i % $k === 0) {
            $prime_numbers_flag = false;
            break;
        }
        ++$k;
    }
    if ($prime_numbers_flag) {
        echo $i . "\n";
    }
    ++$i;
}

//4057
//12101
//13523
?>