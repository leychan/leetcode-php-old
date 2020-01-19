<?php


class Solution {

    /**
     * @desc
     * @user chenlei
     * @param $num
     * @return array
     */
    function readBinaryWatch($num) {
        $result = [];
        for ($i = 0; $i < 12; $i++) {
            for ($j = 0; $j < 60; $j++) {
                //在leetcode上看到的大神的解法，将数字转成二进制，然后将1的个数加起来对比
                $h = sprintf('%b', $i);
                $m = sprintf('%b', $j);
                $h_count = substr_count($h, '1');
                $m_count = substr_count($m, '1');
                if ($h_count + $m_count == $num) {
                    array_push($result, sprintf('%d:%02d', $i, $j));
                }
            }
        }
        return $result;
    }

}

$nums = 1;
$sol = new Solution();
print_r($sol->readBinaryWatch($nums));