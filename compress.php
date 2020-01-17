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
        $fast = 0;
        $slow = 1;
        $count = 1;
        $result = [];

        for ($i = 0; $i < $len; $i++) {
//            echo 'fast ' . $fast, PHP_EOL;
//            echo 'slow ' . $slow, PHP_EOL;
            if ($chars[$fast] == $chars[$slow]) {
                $count++;
                $slow++;
            } else {
//                echo 'fast更新 ', $slow, PHP_EOL;
//                echo $chars[$fast];
                array_push($result, $chars[$fast]);
                array_push($result, $count);
                $fast = $slow;
                $slow = $fast + 1;
                $count = 1;
            }

        }
        return count($result);
        //print_r($result);
    }
}

$chars = ["a","a","b","b","c","c","c"];
$sol = new Solution();
$sol->compress($chars);