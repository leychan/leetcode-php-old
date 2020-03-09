<?php

class Solution {

    /**
     * @param Integer[][] $nums
     * @param Integer $r
     * @param Integer $c
     * @return Integer[][]
     */
    static function matrixReshape($nums, $r, $c) {
        $r_old = count($nums);
        $c_old = count($nums[0]);
        if ($r_old * $c_old != $r * $c) {
            return $nums;
        }
        //重新排列数组为一行
        $tmp = [];
        for ($i = 0; $i < $r_old; $i++) {
            for ($j = 0; $j < $c_old; $j++) {
                $tmp[] = $nums[$i][$j];
            }
        }

        $return = [];
        for ($i = 0; $i < $r; $i++) {
            for ($j = 0; $j < $c; $j++) {
                $return[$i][$j] = array_shift($tmp);
            }
        }

        return $return;
    }
}

$nums = [
    [1, 2], [3, 4], [5, 6]
];

$r = 2;
$c = 6;

print_r(Solution::matrixReshape($nums, $r, $c));