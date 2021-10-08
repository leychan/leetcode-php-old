<?php

class Solution {

    /**
     * @param Integer $rowIndex
     * @return Integer[]
     */
    static function generate($rowIndex) {
        if ($rowIndex == 0) {
            return [1];
        }
        if ($rowIndex == 1) {
            return [1, 1];
        }
        $start = [1, 1];
        //从数组第3个元素开始处理
        for ($i = 2; $i <= $rowIndex; $i++) {
            $tmp = [1];
            for ($j = 1; $j < $i; $j++) {
                //等于数组的上一个元素的第$j-1位和第$j位相加
                $tmp[] = $start[$j - 1] + $start[$j];
            }
            $tmp[] = 1;
            $start = $tmp;
        }
        print_r($start);
    }
}

Solution::generate(4);