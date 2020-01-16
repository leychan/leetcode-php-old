<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n) :int{
        if ($n == 1) {
            return 1;
        }
        if ($n == 2) {
            return 2;
        }
        $max_division = $this->maxDivisionTwo($n);
        $result = 1;
        for ($i = 1; $i < $max_division; $i++) {

        }
    }

    function maxDivisionTwo($n) :int {
        return intval($n/2);
    }
}