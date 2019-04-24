<?php
/*ウィキペディアに載っていたの*/

$time_start = microtime(true);

function eratosthenes($max)
{
    $lists = array();
    $primeLists = array();

    // maxの平方根
    $sqrt = floor(sqrt($max));

    for ($i = 2; $i <= $max; $i++) {
        $lists[$i] = $i;
    }

    while ($val = array_shift($lists)) {
        $primeLists[] = $val;
        // maxの平方根に達したら終了
        if ($val > $sqrt) {
            break;
        }
        foreach ($lists as $key2 => $val2) {
            if ($val2 % $val === 0) {
                unset($lists[$key2]);
            }
        }
    }
    $primeLists = array_merge($primeLists, $lists);
    return $primeLists;
}

print_r(eratosthenes(10000000));

$time = microtime(true) - $time_start;
echo "{$time} 秒";
