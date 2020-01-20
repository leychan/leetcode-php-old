<?php

class Solution
{

    /**
     * @desc 新建一个数组，存放从1到n，然后扫描输入的数组，把扫描到的元素从新建的数组中移除， 则最后留下的就是输入的数组中消失的数字
     * @user chenlei
     * @param int[] $nums
     * @return array
     */
    function findDisappearedNumbers($nums) {
        $len = count($nums);
        $result = [];
        for ($i = 1; $i <= $len; $i++) {
            array_push($result, $i);
        }
        for ($i = 0; $i < $len; $i++) {
            if (isset($result[$nums[$i] - 1])) {
                unset($result[$nums[$i] - 1]);
            };
        }
        return $result;
    }
}

$nums = [4, 3, 2, 7, 8, 2, 3, 1];
$sol = new Solution();
$sol->findDisappearedNumbers($nums);