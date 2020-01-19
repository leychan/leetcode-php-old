<?php

class Solution {

    /**
     * // 没做完
     * @user chenlei
     * @param $chars
     * @return int
     */
    function compress(&$chars) {
        $len = count($chars);
        if ($len == 1) {
            return $chars;
        }
        $fast = 0;
        $count = 1;
        $result = [];

        for ($i = 1; $i < $len; $i++) {

            if ($chars[$fast] == $chars[$i]) {
                $count++;
                if ($i == $len -1) {
                    array_push($result, $chars[$fast]);
                    if ($count>1) {
                        array_push($result, $count);
                    };
                }
            } else {
                array_push($result, $chars[$fast]);
                if ($count>1) {
                    array_push($result, $count);
                };
                $fast = $i;
                $count = 1;
                if ($i == $len -1) {
                    array_push($result, $chars[$i]);
                }
            }
        }
        print_r($result);
        return count($result);
    }
}

$chars = ["a", "b", 'b', 'n', 'n'];
$sol = new Solution();
$sol->compress($chars);