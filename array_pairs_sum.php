<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    static function arrayPairSum($nums) {
        sort($nums);
        $len = count($nums);
        $sum = 0;
        for ($i = 0; $i < $len; $i+=2) {
            $sum += $nums[$i];
        }
        return $sum;
    }
}

$nums = [1,2,4,3];
echo Solution::arrayPairSum($nums);