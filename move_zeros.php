<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
        $len = count($nums);
        $pos = 0;
        for ($i = 0; $i < $len; $i++) {
            if ($nums[$i] != 0) {
                $nums[$pos] = $nums[$i];
                $pos++;
            }
        }
        for ($i = $pos; $i < $len; $i++) {
            $nums[$i] = 0;
        }

    }

}

$nums = [1, 0, 1];
$sol = new Solution();
$sol->moveZeroes($nums);
var_dump($nums);

