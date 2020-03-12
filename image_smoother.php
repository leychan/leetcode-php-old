<?php

class Solution {

    /**
     * @desc 遍历数组，对每个元素进行相应计算
     * @user chenlei
     * @param $M int[][]
     * @return array
     */
    static function imageSmoother($M) {
        $len = count($M);
        $len2 = count($M[0]);
        $result = [];
        for ($i = 0; $i < $len; $i++) {
            for ($j = 0; $j < $len2; $j++) {
                $ave = $M[$i][$j];
                $count = 1;
                if (isset($M[$i - 1][$j - 1])) {
                    $ave += $M[$i - 1][$j - 1];
                    $count++;
                }
                if (isset($M[$i - 1][$j])) {
                    $ave += $M[$i - 1][$j];
                    $count++;
                }
                if (isset($M[$i - 1][$j + 1])) {
                    $ave += $M[$i - 1][$j + 1];
                    $count++;
                }
                if (isset($M[$i][$j - 1])) {
                    $ave += $M[$i][$j - 1];
                    $count++;
                }
                if (isset($M[$i][$j + 1])) {
                    $ave += $M[$i][$j + 1];
                    $count++;
                }
                if (isset($M[$i + 1][$j - 1])) {
                    $ave += $M[$i + 1][$j - 1];
                    $count++;
                }
                if (isset($M[$i + 1][$j])) {
                    $ave += $M[$i + 1][$j];
                    $count++;
                }
                if (isset($M[$i + 1][$j + 1])) {
                    $ave += $M[$i + 1][$j + 1];
                    $count++;
                }
                $result[$i][$j] = floor($ave / $count);
            }
        }
        return $result;
    }
}

$param = [
    [1, 1, 1],
    [1, 0, 1],
    [1, 1, 1]
];
print_r(Solution::imageSmoother($param));