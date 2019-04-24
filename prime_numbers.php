<?php
/*コーディング規約を気にしながら*/

namespace test;

//use

//計測開始
$time_start = microtime(true);

class Prime_class
{
    public function main($max)
    {
        $this->prime_numbers($max);
    }

    private function prime_numbers($max)
    {
        for ($i = 2; $i <= $max; $i++) {
            $prime_numbers_flag = true;
            for ($k = 2; $k < $i; $k++) {
                if ($i % $k === 0) {
                    $prime_numbers_flag = false;
                    break;
                }
            }
            if ($prime_numbers_flag) {
                echo $i . "\n";
            }
        }
    }
}

(new Prime_class())->main(100000);

//計測したい時間
$time = microtime(true) - $time_start;
echo "{$time} 秒";
?>