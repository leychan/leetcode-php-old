<?php

class Solution {

    /**
     * @param String $s
     * @return String
     */
    static function reverseWords($s) {
        $s_arr = explode(' ', $s);
        $len = count($s_arr);
        if ($len == 1) {
            return strrev($s_arr[0]);
        }
        $return = '';
        for ($i = 0; $i < $len; $i++) {
            $return .= strrev($s_arr[$i]);
            if ($i != $len - 1) {
                $return .= ' ';
            }
        }
        return $return;
    }
}
$s = "God Ding";
echo Solution::reverseWords($s);