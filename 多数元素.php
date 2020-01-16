<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        $result = 0;
        $count_flag = 0;
        foreach ($nums as $v) {
            if ($count_flag == 0) {
                $result = $v;
            }
            $count_flag += ($result == $v) ? 1 : -1;
        }
        return $result;
    }
}

$arr = [2,2,1,1,1,1,1,2,2];
$s = new Solution();
echo $s->majorityElement($arr);