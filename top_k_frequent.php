<?php

class Solution {

    /**
     * // 遍历数组，统计各个元素出现的次数， 然后将统计次数的数组排序， 取前k个元素值
     * @user chenlei
     * @param int[] $nums
     * @param int $k
     * @return 0|array
     */
    function topKFrequent($nums, $k) {
        //$count_arr = array_count_values($nums);
        $count_arr = [];
        $len = count($nums);
        for ($i = 0; $i < $len; $i++) {
            isset($count_arr[$nums[$i]]) ? $count_arr[$nums[$i]]++ : $count_arr[$nums[$i]] = 1;
        }
        arsort($count_arr);
        return array_slice(array_keys($count_arr), 0, $k);
    }
}

$sol = new Solution();
var_dump($sol->topKFrequent([3,0,1,0], 1));