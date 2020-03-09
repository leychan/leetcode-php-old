<?php

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    static function checkRecord($s) {
        $a = substr_count($s, 'A');
        if ($a > 1) {
            return false;
        }
        if (false !== strpos($s, 'LLL')) {
            return false;
        }
        return true;
    }
}
$s = 'PPALLLP';
var_dump(Solution::checkRecord($s));