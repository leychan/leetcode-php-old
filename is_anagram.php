<?php
/**
 * Created by .
 * Date 2020-01-15
 * Time 21:57
 * User chenlei
 * Desc
 */
class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t) {
        $len = strlen($s);
        $len_t = strlen($t);
        if ($len != $len_t) {
            return false;
        }
        if ($len == 0) {
            return true;
        }
        for ($i = 0; $i < $len; $i++) {
            $a = substr($s, $i, 1);
            $pos = strpos($t, $a);
            if ($pos !== false) {
                $t = substr_replace($t, '', $pos, 1);
            } else {
                return false;
            }
        }

        return $t == '';
    }
}

$s = "b";

$t = 'a';

$solution = new Solution();
var_dump($solution->isAnagram($s, $t));
