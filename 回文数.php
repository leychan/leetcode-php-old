<?php

/**
 * Class Solution
 * 9. 回文数 https://leetcode-cn.com/problems/palindrome-number/
 */
class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        if ($x < 0) {
            return false;
        }
        $x_reverse = strrev($x);
        $x = (string)$x;
        if ($x_reverse == $x) {
            return true;
        }
        return false;
    }
}