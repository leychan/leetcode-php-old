<?php


/**
 * Class Solution
 */
class Solution {

    /**
     * @desc 快慢指针
     * @user chenlei
     * @param $nums
     * @return mixed
     */
    function thirdMax($nums) {
        //对数组进行排序
        rsort($nums);
        $len = count($nums);
        if (count(array_unique($nums)) >= 3) {
            $fast = 1;
            $slow = 0;
            $count = 1;
            for ($i = 0; $i < $len; $i++) {
                if ($nums[$slow] == $nums[$fast]) {
                    $fast++;
                } else {
                    $count++;
                    if ($count == 3) {
                        return $nums[$fast];
                    }
                    $slow = $fast;
                    $fast = $slow + 1;
                }
            }
        } else {
            return $nums[0];
        }

    }

    /**
     * @desc 先对数组去重，然后倒序，如果元素少于3个返回最大的，即$nums[0], 否则返回第3大的，即$nums[2]
     * @user chenlei
     * @param $nums
     * @return mixed
     */
    function thirdMax2($nums) {
        $nums = array_unique($nums);
        rsort($nums);
        $len = count($nums);
        if ($len >= 3) {
            return $nums[2];
        }
        return $nums[0];
    }
}

$nums = [2, 2, 3, 1];
$sol = new Solution();
echo $sol->thirdMax2($nums);