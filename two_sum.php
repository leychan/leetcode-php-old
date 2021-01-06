<?php
/**
 * Created by chenlei
 * Date 20-10-27
 * Time 下午1:37
 * Desc 和为s的两个数 https://leetcode-cn.com/problems/he-wei-sde-liang-ge-shu-zi-lcof/
 */

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    static function twoSum($nums, $target) {
        $len = count($nums);
        $left = 0;
        $right = $len - 1;
        while ($left < $right) {
            $sum = $nums[$left] + $nums[$right];
            if ($sum == $target) {
                return [$nums[$left], $nums[$right]];
            } else if ($sum < $target) {
                $left++;
            } else {
                $right--;
            }
        }
        return [];
    }
}
$nums = [14,15,16,22,53,60];
$target = 76;

print_r(Solution::twoSum($nums, $target));