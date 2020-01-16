<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function singleNumber($nums) {
        $result = [];
        sort($nums);
        $len = count($nums);
        for ($i = 0; $i < $len; $i++) {
            if ($i == $len - 1) {
                array_push($result, $nums[$i]);
                break;
            }
            if ($nums[$i] == $nums[$i + 1]) {
                $i++;
                continue;
            }
            array_push($result, $nums[$i]);
        }
        return $result;

    }
}

$nums = [1, 2, 1, 3, 2, 5];
$sol = new Solution();
var_dump($sol->singleNumber($nums));