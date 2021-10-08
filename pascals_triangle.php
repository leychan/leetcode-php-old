<?php

class Solution {

    /**
     * @param Integer $numRows
     * @return Integer[][]
     */
    static function generate($numRows) {
        $result = [];
        if ($numRows == 1) {
            return [[1]];
        }if ($numRows == 1) {
            return [[1], [1, 1]];
        }
        $result[0] = [1];
        $result[1] = [1,1];
        //从数组第3个元素开始处理
        for ($i = 2; $i < $numRows; $i++) {
            $result[$i] = [1];
            for ($j = 1; $j < $i; $j++) {
                //等于数组的上一个元素的第$j-1位和第$j位相加
                $tmp = $result[$i-1][$j-1] + $result[$i-1][$j];
                array_push($result[$i], $tmp);
            }
            array_push($result[$i], 1);
        }
        print_r($result);
    }
}

Solution::generate(5);