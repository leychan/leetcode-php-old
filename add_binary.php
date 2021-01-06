<?php

class Solution {

    /**
     * @desc
     * @user lei
     * @date 21-1-6
     * @param $a
     * @param $b
     * @return string
     */
    static function addBinary($a, $b) {
        $len_a = strlen($a);
        $len_b = strlen($b);
        if ($len_a > $len_b) {
            $b = str_repeat('0', $len_a - $len_b) . $b;
        } else {
            $a = str_repeat('0', $len_b - $len_a) . $a;
        }

        $len = strlen($a);
        $flag = 0;
        $result = '';
        for ($i = 0; $i < $len; $i++) {
            $a_tmp = substr($a, -1, 1);
            $a = self::newStr($a); //更新a
            $len_a--;
            $b_tmp = substr($b, -1, 1);
            $b = self::newStr($b); //更新b
            $len_b--;
            $tmp = intval($a_tmp) + intval($b_tmp) + $flag;
            echo 'a_tmp:', $a_tmp, ' b_tmp:', $b_tmp, ' flag:', $flag, ' tmp:', $tmp, PHP_EOL;
            if ($tmp <= 1) {
                $result = $tmp . $result;
                $flag = 0;
            } else if ($tmp == 2) {
                $result = '0' . $result;
                $flag = 1;
            } else {
                $result = '1' . $result;
                $flag = 1;
            }
            echo 'result:', $result, PHP_EOL;
        }
        if ($flag > 0) {
            $result = '1' . $result;
        }
        return $result;
    }

    static function newStr($str) {
        return substr($str, 0, strlen($str) - 1);
    }
}

$a = '111';
$b = '11';
echo Solution::addBinary($a, $b);