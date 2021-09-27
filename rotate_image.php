<?php

class Solution {

    /**
     * @param Integer[][] $matrix
     * @return NULL
     */
    static function rotate(&$matrix) {
        $len = count($matrix);
        for ($i = 0; $i < $len; $i++) {
            $len_c = $len - 1 - $i;
            for ($j = $i; $j < $len_c; $j++) {
                $change = $matrix[$i][$j]; //要去替换的值
                $current = $matrix[$j][$len - 1 - $i]; //要被替换的值
                $matrix[$j][$len - 1 - $i] = $change;
                $change = $current;
                $current = $matrix[$len - 1 - $i][$len - 1 - $j];
                $matrix[$len - 1 - $i][$len - 1 - $j] = $change;
                $change = $current;
                $current = $matrix[$len - 1 - $j][$len - 1 -($len - 1 - $i)];
                $matrix[$len - 1 - $j][$len - 1 - ($len - 1 - $i)] = $change;
                $matrix[$i][$j] = $current;
            }
        }
        print_r($matrix);
    }
}

$matrix = [[1,2,3],[4,5,6],[7,8,9]];
$matrix = [[5,1,9,11],[2,4,8,10],[13,3,6,7],[15,14,12,16]];
//$matrix = [[1,2],[3,4]];
Solution::rotate($matrix);
