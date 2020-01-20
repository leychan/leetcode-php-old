<?php

class Solution
{

    /**
     * @param Integer $n
     * @return String[]
     */
    function fizzBuzz($n) {
        $result = [];
        for ($i = 1; $i <= $n; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                array_push($result, 'FizzBuzz');
                continue;
            }
            if ($i % 3 == 0) {
                array_push($result, 'Fizz');
                continue;
            }
            if ($i % 5 == 0) {
                array_push($result, 'Buzz');
                continue;
            }
            array_push($result, (string)$i);
        }
        return $result;
    }
}

$n = 20;
$sol = new Solution();
print_r($sol->fizzBuzz($n));