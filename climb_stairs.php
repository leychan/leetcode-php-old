<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n) {
        $plan[1] = 1;
        $plan[2] = 2;
        for ($i = 3; $i <= $n; $i++) {
            $plan[$i] = $plan[$i-1] + $plan[$i - 2];
        }
        return $plan[$n];
    }
}

$sol = new Solution();
echo $sol->climbStairs(4);