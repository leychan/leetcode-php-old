<?php

class Solution {

    /**
     * @desc 对数组倒序，如果全是正数或者负数，三个数最大乘积肯定就是倒序三个数的乘积，否则取最大数和两个最小数的乘积（绝对值越小的负数比较大）
     * @user chenlei
     * @param $nums int[]
     * @return int
     */
    static function maximumProduct($nums) {
        rsort($nums);
        return max($nums[0] * $nums[1] * $nums[2], $nums[0] * $nums[count($nums) -1] * $nums[count($nums) - 2]);
    }
}

$nums = [-4,-3,-2,-1,-60];
echo Solution::maximumProduct($nums);