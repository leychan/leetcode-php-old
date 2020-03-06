<?php
class Solution {

    /**
     * @param Integer $num
     * @return String
     */
    static function convertToBase7($num) {
        $arr = [];
        $flag = 0;
        if ($num < 0) {
            $num = abs($num);
            $flag = 1;
        }
        while (true) {
            $tmp = $num % 7;
            array_push($arr, $tmp);
            if ($num < 7) {
                break;
            }
            $num = $num / 7;
        }
        return $flag > 0 ? '-' . implode('', array_reverse($arr)) : implode('', array_reverse($arr));
    }
}

echo Solution::convertToBase7(0);