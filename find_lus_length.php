<?php

class Solution {

    /**
     * @param String $a
     * @param String $b
     * @return Integer
     */
    static function findLUSlength($a, $b) {
        if ($a == $b) {
            return -1;
        }
        $len_a = strlen($a);
        $len_b = strlen($b);
        if ($len_a == $len_b) {
            return $len_a;
        }
        return max($len_a, $len_b);
    }
}

$a = 'asd';
$b = 'ascs';
echo Solution::findLUSlength($a, $b);