<?php

class Solution {

    /**
     *
     * @param String $s
     * @return Boolean
     */
    function repeatedSubstringPattern($s) {
        $len = strlen($s);
        for ($i = 1; $i < $len; $i++) {
            $pattern = substr($s, 0, $i);
            echo 'pattern ', $pattern, PHP_EOL;
            $p_len = strlen($pattern);
            $divide = $len % $p_len;
            echo 'repeat ', $divide, PHP_EOL;
            if ($divide !== 0) {
                continue;
            }
            $repeat = $len / $p_len;
            echo str_repeat($pattern, $repeat), PHP_EOL;
            if (str_repeat($pattern, $repeat) == $s) {
                return true;
            }
        }
        return false;
    }
}

$s = 'aaa';
$sol = new Solution();
var_dump($sol->repeatedSubstringPattern($s));