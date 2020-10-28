<?php
/**
 * Created by chenlei
 * Date 20-10-28
 * Time 上午11:07
 * Desc 7. 整数反转 https://leetcode-cn.com/problems/reverse-integer/
 */

class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    static function reverse($x) {
        $tmp =  $x >= 0 ? (int)strrev($x) : '-' . (int)strrev($x);
        if ($tmp < -pow(2, 31) || $tmp > pow(2, 31) - 1 || $x == 0) {
            return 0;
        }
        return $tmp;
    }
}

$x = 1534236469;
echo Solution::reverse($x);