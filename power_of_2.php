<?php
/**
 * Created by .
 * Date 2020-01-15
 * Time 21:49
 * User chenlei
 * Desc
 */
class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isPowerOfTwo($n) {
        if ($n <= 0) {
            return false;
        }
        return ($n&($n-1)) == 0;
    }
}

$solution = new Solution();
var_dump($solution->isPowerOfTwo(4));