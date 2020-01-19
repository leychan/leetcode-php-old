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
                        foreach ($this->transferIntToArr($count) as $value) {
                            array_push($result, $value);
                        }
                    };
                }
            } else {
                array_push($result, $chars[$fast]);
                if ($count>1) {
                    foreach ($this->transferIntToArr($count) as $value) {
                        array_push($result, $value);
                    }
                }

                $fast = $i;
                $count = 1;
                if ($i == $len -1) {
                    array_push($result, $chars[$i]);
                }
            }
        }
        $chars = $result;
        return count($chars);
    }

    function transferIntToArr($num) {
        $string = (string)$num;
        if (strlen($string) == 1) {
            return [$string];
        }
        $arr = str_split($string);
        return $arr;
    }
}

$chars = ["a", "b", 'b', 'n', 'n', 'n', 'n', 'n', 'n', 'n', 'n', 'n', 'n', 'n', 'n'];
$sol = new Solution();
$sol->compress($chars);
var_dump($chars);