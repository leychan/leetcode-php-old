<?php
/**
 * Created by chenlei
 * Date 20-10-29
 * Time 下午1:37
 * Desc 26. 删除排序数组中的重复项 https://leetcode-cn.com/problems/remove-duplicates-from-sorted-array/
 */

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    static function removeDuplicates(&$nums) {
        $len = count($nums);
        if ($len == 0 || $len == 1) {
            return $len;
        }
        $start = 0;
        $end = $start + 1;
        while ($end < $len) {
            if ($nums[$start] === $nums[$end]) {
                unset($nums[$end]);
                $end++;
            } else {
                $start = $end;
                $end++;
            }
        }
        return count($nums);
    }
}

$nums = [0,0,1,1,1,2,2,3,3,4];
echo Solution::removeDuplicates($nums);
print_r($nums);