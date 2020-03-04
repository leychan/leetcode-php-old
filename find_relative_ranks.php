<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return String[]
     */
    static function findRelativeRanks($nums) {
        arsort($nums);
        $new = array_flip($nums); //每个分数对应的原始数组的位置
        $arr = array_keys($new); //每个分数对应的名次
        $len = count($nums);
        for ($i = 0; $i < $len; $i++) {
            if ($i <= 2) {
                switch ($i) {
                    case 0:
                        $nums[$new[$arr[$i]]] = 'Gold Medal';
                        break;
                    case 1:
                        $nums[$new[$arr[$i]]] = 'Silver Medal';
                        break;
                    case 2:
                        $nums[$new[$arr[$i]]] = 'Bronze Medal';
                        break;
                }
            } else {
                $nums[$new[$arr[$i]]] = (string)($i + 1);
            }
        }
        ksort($nums);
        return $nums;
    }
}

$nums = [5,4,3,2,1];
//$nums = array_reverse($nums);
var_dump(Solution::findRelativeRanks($nums));