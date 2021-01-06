<?php
/**
 * Created by chenlei
 * Date 20-11-3
 * Time 上午9:06
 * Desc 941. 有效的山脉数组 https://leetcode-cn.com/problems/valid-mountain-array/
 */

class Solution {

    /**
     * @param Integer[] $A
     * @return Boolean
     */
    static function validMountainArray($arr) {
        $len = count($arr);
        if ($len < 3) {
            return false;
        }
        $max = max($arr);
        $pos = array_search($max, $arr);
        //如果最大值位置在第一个或者最后一个,或者出现最大值在前后位置上,返回false
        if ($pos == 0 || $pos == $len - 1
            || $arr[$pos] == $arr[$pos - 1]
            || $arr[$pos] == $arr[$pos + 1]) {
            return false;
        }
        for ($i = 0; $i < $len; $i++) {
            if ($i < $pos && $arr[$i] >= $arr[$i + 1]) {
                return false;
            }
            if ($i > $pos && $arr[$i-1] <= $arr[$i]) {
                return false;
            }
        }

        return true;
    }
}

$A = [0,3,2,1];
var_dump(Solution::validMountainArray($A));