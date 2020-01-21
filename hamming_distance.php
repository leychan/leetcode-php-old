<?php


class Solution {

    /**
     * 转成二进制形式的字符串，逐个比对
     * @param Integer $x
     * @param Integer $y
     * @return Integer
     */
    static function hammingDistance($x, $y) {
        $x_str = sprintf("%b", $x);
        $y_str = sprintf("%b", $y);
        $x_len = strlen($x_str);
        $y_len = strlen($y_str);
        $len = $x_len - $y_len > 0 ? $x_len : $y_len;
        $x_str = sprintf("%0{$len}b", $x);
        $y_str = sprintf("%0{$len}b", $y);
        $result = 0;
        for ($i = 0; $i < $len; $i++) {
            if ($x_str[$i] != $y_str[$i]) {
                $result++;
            }
        }
        return $result;
    }
}

echo Solution::hammingDistance(1, 4);