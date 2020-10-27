<?php


class Solution {

    /**
     * 和为s的连续正数序列 2
     * @param Integer $target
     * @return Integer[][]
     */
    static function findContinuousSequence($target) {
        $result = [];
        $start = $target / 2;
        $end = $start + 1;
        for ($i = 1; $i <= $start; $i++) {
            $tmp = [];
            $tmp[] = $i;
            for ($j = $i + 1; $j <= $end; $j++) {
                $tmp[] = $j;
                $sum = array_sum($tmp);
                if ($sum == $target) {
                    $result[] = $tmp;
                    break;
                }
                if ($sum > $target) {
                    break;
                }
            }
        }
        return $result;
    }
}

$target = 15;
print_r(Solution::findContinuousSequence($target));