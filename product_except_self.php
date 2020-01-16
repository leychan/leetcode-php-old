<?php
/**
 * Created by .
 * Date 2020-01-16
 * Time 22:23
 * User chenlei
 * Desc
 */

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function productExceptSelf($nums) {
        $result = [];
        $len = count($nums);
        $k = 1;
        for ($i = 0; $i < $len; $i++) {
            $result[$i] = $k;
            $k *= $nums[$i];
        }
        $k = 1;
        for ($i = $len -1; $i >= 0; $i--) {
            $result[$i] *= $k;
            $k *= $nums[$i];
        }
        return $result;
    }
}