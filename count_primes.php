<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function countPrimes($n) {
        $count = 0;
        $count_bool = array_fill(0, $n ,1);
        $count_bool[0] = $count_bool[1] = 0;

        for ($i = 2; $i * $i < $n; $i++) {
            if ($count_bool[$i]) {
                for ($j = 2 * $i; $j < $n; $j += $i) {
                    $count_bool[$j] = 0;
                }
            }
        }

        for ($i = 2; $i < $n; $i++) {
            if ($count_bool[$i]) {
                $count++;
            }
        }
        return $count;
    }

    function isPrime($j) {
        for ($i = 2; $i < $j; $i++) {
            if ($j % $i == 0) {
                return false;
            }
        }
        return true;
    }
}

$solution = new Solution();
var_dump($solution->countPrimes(100000));
